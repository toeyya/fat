<?php
class F_weight extends Flat_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('f_weight_model','weight');
		$this->load->model('f_weight_detail_model','detail');
	}
	public $bmi_mean = array('ผอม'=>'yellow','ปกติ'=>'green','ท้วม'=>'orange','อ้วน'=>'red','อ้วนมาก'=>'grey');
	public $bmi_mean_export = array('ผอม'=>'background-color:#F8EA82;color:#626262;'
								   ,'ปกติ'=>'background-color:#BDFBC5;color:#626262;'
								   ,'ท้วม'=>'background-color:#FBBE99;color:#626262;'
								   ,'อ้วน'=>'background-color:#FFA29B;color:#626262;'
								   ,'อ้วนมาก'=>'background-color:#BCBCBC;color:#626262;');
	public $fat_mean = array('ปกติ'=>'green','อ้วนลงพุง'=>'red');
	public $fat_mean_export = array('ปกติ'=>'background-color:#BDFBC5;color:#626262;','อ้วนลงพุง'=>'background-color:#FFA29B;color:#626262;');
	function ebelly()
	{
		if($this->session->userdata('permission_id')=="3" ){
			redirect('f_behavior/person/index');
		}else{
			$this->template->set_layout('home');
			$this->template->build('e-belly');
		}

	}
	function index($time,$print=FALSE)
	{//$this->db->debug = true;
		$data['year'] = (empty($_GET['year'])) ?  date('Y')+543 :$_GET['year'];
		$data['bmi_mean'] = $this->bmi_mean;
		$data['fat_mean'] = $this->fat_mean;
		$data['gender']  = array('1'=>'ชาย','2'=>'หญิง');
		$data['time'] = $time;
		$user_id = $this->session->userdata('id');
		$data['user_id'] = $user_id;
		$data['permission'] = $this->session->userdata('permission_id');
		/*$year = date('Y');$yy = $year-1;$yy_end = $year;
		if(!empty($_GET['year'])){
			$yy = $_GET['year']-1;
			$yy_end = $_GET['year'];
			$data['year_search'] = $_GET['year']+543;
		}
		$data['year_search'] = $year+543;
		$wh =" and date(f_weight_detail.created) between '$yy-10-01' and '$yy_end-09-30'"; */
		$wh = (empty($_GET['year'])) ?  " and year=".$data['year']: " and year =".$_GET['year'];

		if(empty($print)){
			$result = $this->weight->where("user_id=$user_id and time=$time $wh")->get();
		}else{
			$result = $this->weight->where("user_id=$user_id and time=$time $wh")->get('',true);
		}

		if($time=="2"){
			if(empty($result)){
				$this->load->model('f_weight_model','weight1');
				$result = $this->weight1->where("user_id = $user_id $wh")->get();
			}
		}
		$data['result'] = $result;
		if($print=="preview"){
			$this->template->set_layout('report');
			$this->template->build('report',$data);
		}else if($print=="export"){
			$data['bmi_mean_export'] = $this->bmi_mean_export;
			$data['fat_mean_export'] = $this->fat_mean_export;
			$filename= "รอบเอวและน้ำหนักครั้งที่".$time."_".date("Y-m-d_H_i_s").".xls";
			$this->template->set_layout('report');
			$this->template->build('export',$data);
			header("Content-Disposition: attachment; filename=".$filename);
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		}else{
			$this->template->build('index',$data);
		}

	}

	function save($time)
	{//var_dump($_POST);exit;
		if($_POST){
			$data['time'] = $time;
			$data['user_id'] = $this->session->userdata('id');
			$cnt = count(array_filter($_POST['fullname']));
			for($i=0;$i<$cnt;$i++){
					$data['year'] = (empty($_POST['year_data'][$i])) ? $_POST['year']:$_POST['year_data'][$i];
					$data['fullname'] = $_POST['fullname'][$i];
					$data['gender']=$_POST['gender'][$i];
					$data['age'] = $_POST['age'][$i];
					$data['id'] = (!empty($_POST['main_id'][$i])) ? $_POST['main_id'][$i]:'';
					if(!empty($_POST['created'][$i])){$data['created'] =  $_POST['created'][$i];}
					$data['updated'] = (!empty($_POST['updated'][$i])) ? $_POST['updated'][$i]:'';
					$weight_id = $this->weight->save($data);
					$data['weight_id'] = $weight_id;
					$data['weight'] = $_POST['weight'][$i];
					$data['height'] = $_POST['height'][$i];
					$data['waistline'] = $_POST['waistline'][$i];
					$data['fat'] = $_POST['fat'][$i];
					$data['bmi_value'] = $_POST['bmi_value'][$i];
					$data['bmi_mean'] = $_POST['bmi_mean'][$i];
					$data['id'] = (!empty($_POST['detail_id'][$i])) ? $_POST['detail_id'][$i]:'';

					$this->detail->save($data);
			}
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('f_weight/index/'.$time);
	}
	function delete(){
		if(!empty($_GET['id'])){
			$this->detail->delete("weight_id",$_GET['id']);
			$this->weight->delete("f_weight.id",$_GET['id']);
		}
	}
	function ReadData($filepath)
	{
		@require_once 'include/Excel/reader.php';
		$data = new Spreadsheet_Excel_Reader();
		$data -> setOutputEncoding('UTF-8');
		$data -> read($filepath);

		error_reporting(E_ALL ^ E_NOTICE);
		$index = 0;
		for($i = 1; $i <= $data -> sheets[0]['numRows']; $i++) {
			$cnt_colum = count($data->sheets[0]['cells'][$i]);
			for($j=1; $j<=$cnt_colum; $j++) { $import[$index][] = trim($data -> sheets[0]['cells'][$i][$j]); }
			$index++;
		}
		return $import;
	}
	function upload()
	{
		$this->db->Execute("DELETE FROM f_weight_detail WHERE year = ?  and time = ? ",array($_POST['year'],$_POST['time']));
		$ext = pathinfo($_FILES['files']['name'], PATHINFO_EXTENSION);
		$file_name = 'weight_'.date("Y_m_d_H_i_s").'.'.$ext;	$uploaddir = 'import_file/weight/';
		move_uploaded_file($_FILES['files']['tmp_name'], $uploaddir.$file_name);
		$data = $this->ReadData($uploaddir.$file_name);
		$num = count($data);
		unlink($uploaddir.$file_name);
		//$_POST['YEAR'] = $_POST['year_data'];
		for($i=1; $i<$num; $i++)
		{
			$_POST['fullname'] = trim($data[$i][0]);
			$_POST['gender']   = $data[$i][1];
			$_POST['age']      = $data[$i][2];
			$_POST['user_id']  = $this->session->userdata('id');
			$_POST['created'] = date('Y-m-d H:i:s');
			$weight_id=$this->weight->save($_POST);
			$_POST['weight_id'] = $weight_id;
			$_POST['weight'] = $data[$i][3];
			$_POST['height'] = $data[$i][4];
			$fat = fat_cal($_POST['weight'],$_POST['gender']);
			$_POST['fat'] = $fat[0];
			$_POST['waistline'] = $data[$i][5];
			$bmi = bmi_cal($_POST['weight'],$_POST['height']);
			$_POST['bmi_value'] = number_format($bmi[0],1);
			$_POST['bmi_mean'] = $bmi[1];
			$this->detail->save($_POST);
		}
		redirect('f_weight/index/'.$_POST['time']);
	}
	function import($time){
		$data['time'] = $time;
		$data['permission'] = $this->session->userdata('permission_id');
		$this->template->build('import',$data);
	}
	function example($time){
		$data['time'] = $time;
		$this->template->build('example',$data);
	}


}
?>