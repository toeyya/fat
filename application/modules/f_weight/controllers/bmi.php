<?php
class Bmi extends Public_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('f_weight_model','weight');
		$this->load->model('f_weight_detail_model','detail');
		$this->load->model('f_bmi_model','bmi');
	}
	function index()
	{
		$this->load->view('bmi');
	}
	function cal()
	{
		$weight =$_GET['weight'];
		$height =$_GET['height'];
		$data['result']= bmi_cal($weight,$height);
		$fat = $this->bmi->get_row("fat",$data['result'][1]);
		echo $fat['description'];
		//$this->template->set_layout("blank");
		//$this->template->build('show_result',$data);
	}
}
?>