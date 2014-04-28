<?php
class Users extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','user');
		$this->load->model('profile_model','profile');

	}

	function index()
	{
		if(!permission('user','act_read')){
			redirect('admin');
		}
		$wh = (empty($_GET['name'])) ? '' : " AND (response_man like '%".$_GET['name']."%' OR agency_name like '%".$_GET['name']."%' OR email like '%".$_GET['name']."%')";
		$wh.= (empty($_GET['province_id'])) ? '' : " AND f_users.province_id = ".$_GET['province_id'];
		$wh.= (empty($_GET['amphur_id'])) ? '' : " AND f_users.amphur_id =".$_GET['amphur_id'];
		$wh.= (empty($_GET['district_id'])) ? '' : " AND f_users.district_id=".$_GET['district_id'];
		$this->template->append_metadata(js_checkbox());
		$data['result'] = $this->user->sort('id')->order('desc')->where("1=1 $wh")->get();
		$data['pagination'] = $this->user->pagination();
		$this->template->build('admin/users/index',$data);

	}
	function form($id=FALSE,$profiles=FALSE)
	{
		if(!permission('user','act_create') && !permission('user','act_update')){
			redirect('admin');
		}
		$data['title'] =(empty($profiles)) ? "สมาชิก":"ประวัติส่วนตัว";
		$data['rs'] = $this->user->get_row("f_users.id",$id);
		$this->template->build('admin/users/form',$data);
	}
	function save()
	{
		if($_POST){
			$_POST['confirm_email']="1";
			$user_id = $this->user->save($_POST);
			if($_POST['active']==""){$_POST['active']=="1";}
			$_POST['user_id'] = $user_id;
			$this->profile->save($_POST);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('users/admin/users/index');
	}
	function delete($id){
		if(!permission('user','act_delete')){
			redirect('admin');
		}
		if($id){
			$this->user->delete("f_users.id",$id);
			$this->profile->delete("f_profiles.user_id",$id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect('users/admin/users/index');
	}
}

?>