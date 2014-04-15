<?php
class Type extends Admin_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('type_model','type');
		$this->load->model('download_model','download');
	}

	function index()
	{	$this->template->append_metadata(js_checkbox());
		$data['result'] = $this->type->select("f_download.*,agency_name")
									 ->join("LEFT JOIN f_users ON f_users.id = user_id")->sort("")->order("f_download.id desc")->get();
		$data['pagination'] = $this->type->pagination();
		$this->template->build('type/admin/index',$data);
	}
	function form($id=FALSE){
		$data['rs'] = $this->type->get_row($id);
		$this->template->build('type/admin/form',$data);
	}
	function save()
	{
		if($_POST){
			$_POST['user_id'] = $this->session->userdata('id');
			$this->type->save($_POST);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('download/admin/type/index');
	}
	function delete($id)
	{
		if($id){
			$this->dowload->delete("type_id",$id);
			$this->type->delete($id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect('download/admin/type/index');
	}
}
?>