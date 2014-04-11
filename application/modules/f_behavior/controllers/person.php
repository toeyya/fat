<?php
class Person extends Flat_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('f_behavior_model','behavior');
		$this->load->model('f_behavior_detail_model','detail');
		$this->load->model('f_weight/f_weight_model','weight');
		$this->load->model('f_weight/f_weight_detail_model','wdetail');
		$this->load->model('users/profile_model','profile');
	}
	function index(){
		$data['title'] = title();
		$user_id = $this->session->userdata('id');
		$user_id = 2665;
		$data['weight'] = $this->weight->get_row("f_weight.user_id",$user_id);
		$data['behavior'] = $this->behavior->get_row("f_behavior.user_id",$user_id);
		//var_dump($data['behavior']);
		$profile = $this->profile->get_row("user_id",$user_id);
		$data['gender'] = $profile['gender'];
		$this->template->set_layout('blank');
		$this->template->build('person/index',$data);
	}
	function save()
	{ $this->db->debug = true;
		if($_POST)
		{
			$_POST['user_id'] = $this->session->userdata('id');
			$_POST['user_id'] = 2665;
			$_POST['id'] = (!empty($_POST['f_main_id'])) ? $_POST['f_main_id']:'';
			$behavior_id = $this->behavior->save($_POST);

			$_POST['id'] = (!empty($_POST['f_detail_id'])) ? $_POST['f_detail_id']:'';
			$_POST['behavior_id'] = $behavior_id;
			$this->detail->save($_POST);

			$_POST['id'] = (!empty($_POST['w_main_id'])) ? $_POST['w_main_id']:'';
			$weight_id = $this->weight->save($_POST);

			$_POST['id'] = (!empty($_POST['w_detail_id'])) ? $_POST['w_detail_id']:'';
			$_POST['weight_id'] = $weight_id;
			$this->wdetail->save($_POST);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('f_behavior/person/index');
	}
}
?>