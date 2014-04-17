<?php
class District extends Admin_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('district_model','district');
	}
	function index(){
		$data['result'] = $this->district->get();
		$data['pagination'] = $this->district->pagination();
		$this->template->build('district/admin/index',$data);
	}
	function form($id=FALSE)
	{
		$data['rs'] = $this->district->get_row("f_district.id",$id);
		$this->template->build('district/admin/form',$data);
	}
	function delete($id){
		if($id){
			$this->district->delete($id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect('setting/admin/district');
	}
	function save(){
		if($_POST){
			$this->district->save($_POST);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('setting/admin/district');
	}
}
?>