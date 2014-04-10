<?php
class Download extends Public_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model("download_model",'download');
		$this->load->model('type_model','type');
	}
	function index($type_id=1)
	{
		$data['type'] = $this->type->get();
		$data['type_id'] = $type_id;
		$data['result'] = $this->download->where("type_id = $type_id and active=1")->limit(5)->sort('created')->order('desc')->get();
		$this->load->view('inc_index',$data);
	}

}
?>