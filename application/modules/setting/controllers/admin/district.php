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
	function form()
	{

	}
	function delete(){

	}
}
?>