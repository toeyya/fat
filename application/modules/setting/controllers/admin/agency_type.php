<?php
class Agency_type extends  Admin_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('agency_type_model','type');
	}

	function index()
	{
		$this->template->append_metadata(js_checkbox());
		$data['result'] = $this->type->get();
		$data['pagination'] = $this->type->pagination();
		$this->template->build('agency_type/admin/index',$data);
	}
	function form($id=FALSE){
		$data['rs'] = $this->type->get_row($id);
		$this->template->build('agency_type/admin/form',$data);
	}
	function save(){
		if($_POST){
			if($_POST['active']==""){$_POST['active']="1";}
			$this->type->save($_POST);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('setting/admin/agency_type/index');
	}
	function delete($id){
		if($id){
			$this->type->delete($id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect('setting/admin/agency_type/index');
	}
}
?>