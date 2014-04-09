<?php
class Area extends Admin_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('area_model','area');
		$this->load->model('area_detail_model','detail');
	}

	function index()
	{
		$data['result'] = $this->area->get();
		$this->template->build('area/admin/index',$data);
	}
}
?>