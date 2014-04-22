<?php
class Footer extends Public_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('footer_model','footer');
	}
	function index(){

	}
}
?>