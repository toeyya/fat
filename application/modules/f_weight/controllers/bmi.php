<?php
class Bmi extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('f_weight_model','weight');
		$this->load->model('f_weight_detail_model','detail');
	}
	function index()
	{
		$this->load->view('bmi');
	}

}
?>