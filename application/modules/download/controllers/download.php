<?php
class Download extends Public_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model("download_model",'download');
		$this->load->model('type_model','type');
	}
	function index()
	{
		$this->load->view('inc_index');
		//$this->template->build('inc_index');
	}

}
?>