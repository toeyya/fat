<?php
class F_behavior extends Flat_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('f_behavior_model','behavior');
		$this->load->model('f_behavior_detail_model','detail');
	}
	function index($time,$print=FALSE)
	{//$this->db->debug=true;
		$data['time'] = $time;
		$user_id = $this->session->userdata('id');
		$data['user_id'] = $user_id;
		$data['year'] = (empty($_GET['year'])) ?  date('Y')+543 :$_GET['year'];
		$data['gender']  = array('1'=>'ชาย','2'=>'หญิง');
		$wh ="";
		/*$year = date('Y');$yy = $year-1;$yy_end = $year;
		if(!empty($_GET['year'])){
			$yy = $_GET['year']-1;
			$yy_end = $_GET['year'];
			$data['year_search'] = $_GET['year']+543;
		}
		$data['year_search'] = $year+543;
		$wh =" and date(f_behavior_detail.created) between '$yy-10-01' and '$yy_end-09-30'";*/
		$wh = (empty($_GET['year'])) ?  " and year=".$data['year']: " and year =".$_GET['year'];
		if(empty($print)){
			$result = $this->behavior->where("user_id = $user_id and time= $time $wh")->get();
		}else{
			$result = $this->behavior->where("user_id = $user_id and time= $time $wh")->get('',true);
		}

		if($time=="2"){
			if(empty($result)){
				$result = $this->behavior->select("f_behavior_detail.*,f_behavior_detail.id as detail_id,fullname,age,gender,user_id,f_behavior.id as main_id")
						                 ->join("LEFT JOIN f_behavior_detail ON f_behavior.id = f_behavior_detail.behavior_id")
						                 ->where("user_id = $user_id  $wh")->get();
			}
		}
		$data['result'] = $result;
		if($print=="preview"){
			$this->template->set_layout('report');
			$this->template->build('report',$data);
		}else if($print=="export"){
			$filename= "แบบประเมินพฤติกรรมครั้งที่ $time_".date("Y-m-d_H_i_s").".xls";
			$this->template->set_layout('report');
			$this->template->build('export',$data);
			header("Content-Disposition: attachment; filename=".$filename);
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		}else{
			$this->template->set_layout('e-belly');
			$this->template->build('index',$data);
		}

	}

	function save($time)
	{//var_dump($_POST);exit;
	 //$this->db->debug = true;
		if($_POST){
			$data['time'] = $time;
			$data['user_id'] = $this->session->userdata('id');
			$cnt = count(array_filter($_POST['fullname']));
			for($i=0;$i<$cnt;$i++)
			{
				$data['year'] = (empty($_POST['year_data'][$i])) ? $_POST['year']:$_POST['year_data'][$i];
				$data['fullname'] = $_POST['fullname'][$i];
				$data['gender']   = (!empty($_POST['gender'][$i])) ? $_POST['gender'][$i] :'';
				$data['age']      = (!empty($_POST['age'][$i])) ? $_POST['age'][$i] :'';
				$data['id'] = (!empty($_POST['main_id'][$i])) ? $_POST['main_id'][$i]:'';
				if(!empty($_POST['created'][$i])){$data['created'] =  $_POST['created'][$i];}
				$data['updated'] = (!empty($_POST['updated'][$i])) ? $_POST['updated'][$i]:'';
				$behavior_id = $this->behavior->save($data);
				$data['id'] = (!empty($_POST['detail_id'][$i])) ? $_POST['detail_id'][$i]:'';
				$data['behavior_id'] = $behavior_id;
				for($j=0;$j<20;$j++){
						$m = $j;
						$m = $m+1;
						$data['score_'.$m] = @$_POST['score'.$i.'_'.$j];
				}
				$this->detail->save($data);
			}
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('f_behavior/index/'.$time);
	}
	function delete(){
		if(!empty($_GET['id'])){
			// ลบครั้งที่ 1 ก็ลยทั้งสองครั้ง , แก้ไขครั้งที่ 2 ก็แก้ไขครั้งที่ 1 ด้วย
			$this->detail->delete("behavior_id",$_GET['id']);
			$this->behavior->delete("f_behavior.id",$_GET['id']);
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
		$this->db->Execute("DELETE FROM f_behavior_detail WHERE year = ?  and time = ? ",array($_POST['year'],$_POST['time']));
		$ext = pathinfo($_FILES['files']['name'], PATHINFO_EXTENSION);
		$file_name = 'behavior_'.date("Y_m_d_H_i_s").'.'.$ext;	$uploaddir = 'import_file/behavior/';
		move_uploaded_file($_FILES['files']['tmp_name'], $uploaddir.$file_name);
		$data = $this->ReadData($uploaddir.$file_name);
		$num = count($data);
		unlink($uploaddir.$file_name);
		for($i=1; $i<$num; $i++)
		{
			$_POST['fullname'] = trim($data[$i][0]);
			$_POST['gender']   = $data[$i][1];
			$_POST['age']      = $data[$i][2];
			$_POST['user_id']  = $this->session->userdata('id');
			$_POST['created'] = date('Y-m-d H:i:s');
			$id=$this->behavior->save($_POST);
			$_POST['behavior_id'] = $id;
			$k=3;
			for($j=1;$j<21;$j++){
				$_POST['score_'.$j] = $data[$i][$k];
				$k++;
			}
			$this->detail->save($_POST);
		}
		redirect('f_behavior/index/'.$_POST['time']);
	}
	function import($time){
		$data['time'] = $time;
		$this->template->build('import',$data);
	}
	function example($time){
		$data['time'] = $time;
		$this->template->build('example',$data);
	}
}
?>