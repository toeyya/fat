<?php
class Area extends Admin_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('area_model','area');
		$this->load->model('area_detail_model','detail');
	}

	function index()
	{
		$data['result'] = $this->area->get();
		$this->template->build('area/admin/index',$data);
	}
	function form($id=FALSE){
		$data['rs'] = $this->area->get_row($id);
		$this->template->build('area/admin/form',$data);
	}
	function save(){
		if($_POST){
			$this->area->save($_POST);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('setting/admin/area');
	}
	function delete($id){
		if($id){
			$this->area->delete($id);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('setting/admin/area');
	}
}
?>