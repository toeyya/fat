<?php
class Albums extends Public_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('album_model','album');
		$this->load->model('picture_model','picture');

	}
	function index()
	{
		$this->load->view('inc_index');
	}
}
?>