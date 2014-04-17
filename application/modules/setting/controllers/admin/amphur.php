<?php
class Amphur extends Admin_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('amphur_model','amphur');
	}
	function index(){
		$data['result'] = $this->amphur->get();
		$data['pagination'] = $this->amphur->pagination();
		$this->template->build('amphur/admin/index',$data);
	}
	function form($id =FALSE)
	{
		$data['rs'] = $this->amphur->get_row("f_amphur.id",$id);
		$this->template->build('amphur/admin/form',$data);
	}
	function delete($id)
	{
		if($id){
			$this->amphur->delete($id);
			set_notfiy('success',DELETE_DATA_COMPLETE);
		}
		redirect('setting/admin/amphur');
	}
	function save()
	{
		if($_POST){
			$this->amphur->save($_POST);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('setting/admin/amphur');
	}
}
?>