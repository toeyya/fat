<?php
class Type extends Admin_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('type_model','type');
		$this->load->model('download_model','download');
	}

	function index()
	{
		if(!permission('download','act_read')){
			redirect('admin');
		}
		$this->template->append_metadata(js_checkbox());
		$data['result'] = $this->type->select("f_download.*,agency_name")
									 ->join("LEFT JOIN f_users ON f_users.id = user_id")->sort("")->order("f_download.id desc")->get();
		$data['pagination'] = $this->type->pagination();
		$this->template->build('type/admin/index',$data);
	}
	function form($id=FALSE){
		if(!permission('download','act_update') && !permission('download','act_create')){
			redirect('admin');
		}
		$data['rs'] = $this->type->get_row($id);
		$this->template->build('type/admin/form',$data);
	}
	function save()
	{
		if($_POST){
			if(empty($_POST['active'])){$_POST['active']="1";}
			$_POST['user_id'] = $this->session->userdata('id');
			$this->type->save($_POST);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('download/admin/type/index');
	}
	function delete($id)
	{
		if(!permission('download','act_delete')){
			redirect('admin');
		}
		if($id){
			$this->download->delete("type_id",$id);
			$this->type->delete($id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect('download/admin/type/index');
	}
}
?>