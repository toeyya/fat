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
	{  $this->template->append_metadata(js_checkbox());
		$data['result'] = $this->user->get();
		$data['pagination'] = $this->user->pagination();
		$this->template->build('admin/users/index',$data);

	}
	function form($id=FALSE)
	{

		$data['rs'] = $this->user->get_row("f_users.id",$id);
		$this->template->build('admin/users/form',$data);
	}
	function save()
	{
		if($_POST){
			$user_id = $this->user->save($_POST);
			if($_POST['active']==""){$_POST['active']=="1";}
			$_POST['user_id'] = $user_id;
			$this->profile->save($_POST);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('users/admin/users/index');
	}
}

?>