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
		$data['year'] = date('Y')+543;
		$data['gender']  = array('1'=>'ชาย','2'=>'หญิง');
		$wh ="";
		$year = date('Y');$yy = $year-1;$yy_end = $year;
		if(!empty($_GET['year'])){
			$yy = $_GET['year']-1;
			$yy_end = $_GET['year'];
			$data['year_search'] = $_GET['year']+543;
		}
		$data['year_search'] = $year+543;
		$wh =" and date(f_behavior_detail.created) between '$yy-10-01' and '$yy_end-09-30'";
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
			$this->behavior->delete($_GET['id']);

		}
	}
}
?>