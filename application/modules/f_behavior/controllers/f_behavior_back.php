<?php
class F_behavior extends Fat_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('f_behavior_model','behavior');
		$this->load->model('f_behavior_detail_model','detail');
	}
	function index($time)
	{
		$data['year'] = date('Y')+543;
		$user_id = $this->session->userdata('id');
		$wh ="";
		if(!empty($_GET['year'])){
			$yy = $_GET['year']-1;
			$yy_end = $_GET['year'];
			$wh .=" and date(created) between '$yy-10-01' and $yy_end'-09-30'";
		}
		if($time=="2"){
			$rs = $this->db->GetOne("SELECT f_behavior.id FROM f_behavior LEFT JOIN f_behavior_detail ON f_behavior.id = behavior_id where user_id = $user_id and time='2'");
			if(!$rs){
				$wh .= " and time='$time'";
			}
		}
		$data['result'] = $this->behavior->select("f_behavior_detail.*,f_behavior_detail.id as detail_id,fullname,age,gender,f_behavior.id as main_id")
										 ->join("LEFT JOIN f_behavior_detail ON f_behavior.id = f_behavior_detail.behavior_id")
										 ->where("user_id =".$user_id.$wh)->get();
		$data['gender']  = array('1'=>'ชาย','2'=>'หญิง');
		$this->template->build('index'.$time,$data);
	}

	function save($time)
	{
		//print_r($_POST);echo "time = ".$time."</br>";echo count($_POST);
		//$this->db->debug = true;
		if($_POST)
		{
			$data['time'] = $time;
			$data['user_id'] = $this->session->userdata('id');
			$cnt = count($_POST);
			for($i=0;$i<$cnt;$i++){
					echo $_POST['rows'.$i]['fullname'];
					if(!empty($_POST['rows'.$i]['fullname']))
					{
						$data['fullname'] = $_POST['rows'.$i]['fullname'];
						$data['age'] = $_POST['rows'.$i]['age'];
						$data['gender'] = $_POST['rows'.$i]['gender'];
						if(!empty($_POST['rows'.$i]['created'])){
							$data['created'] =  $_POST['rows'.$i]['created'];
						}
						$data['updated'] = (!empty($_POST['rows'.$i]['updated'])) ? $_POST['rows'.$i]['updated']:'';
						$data['id'] = (!empty($_POST['rows'.$i]['main_id'])) ? $_POST['rows'.$i]['main_id']:'';
						$behavior_id = $this->behavior->save($data);
						$data['id'] = (!empty($_POST['rows'.$i]['detail_id'])) ? $_POST['rows'.$i]['detail_id']:'';
						$data['behavior_id'] = $behavior_id;
						for($j=0;$j<20;$j++){
							$m = $j;
							$m = $m+1;
							$data['score_'.$m] = $_POST['rows'.$i]['score'.$i.'_'.$j];
						}
						$this->detail->save($data);
					}
				}

			//set_notify('success',SAVE_DATA_COMPLETE);
		}
		//redirect('f_behavior/index');
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