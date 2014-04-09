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
	function form()
	{

	}
	function delete(){

	}
}
?>