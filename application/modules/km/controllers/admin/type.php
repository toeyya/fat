<?php
class Type extends Admin_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('km_model','km');
		$this->load->model('type_model','type');
	}
	function index()
	{
		$data['result'] = $this->type->select("f_km.*,agency_name")
									 ->join("LEFT JOIN f_users ON f_users.id = user_id")
									 ->get();
		$data['pagination'] = $this->type->pagination();
		$this->template->build('type/admin/index',$data);
	}
	function form($id = FALSE)
	{
		$data['rs'] = $this->type->get_row($id);
		$this->template->build('type/admin/form',$data);
	}
	function save(){
		if($_POST){
			$_POST['user_id'] = $this->session->userdata('id');
			$this->type->save($_POST);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('km/admin/type/index');
	}
	function delete($id)
	{
		if($id)
		{
			$this->km->delete("type_id",$id);
			$this->type->delete($id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect('km/admin/type/index');
	}
}
?>