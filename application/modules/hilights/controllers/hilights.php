<?php
class Hilights extends  Public_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('hilights_model','hilight');
	}
	function index()
	{
		$data['result'] = $this->hilight->where("active =1")->sort("created")->order("desc")->limit(5)->get();
		$this->load->view('inc_index');
	}
	function test(){
		$this->template->build('test');
	}
}
?>