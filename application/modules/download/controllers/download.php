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
		$data['type'] = $this->type->get();
		//$data['type_id'] = $type_id;
		//$data['result'] = $this->download->where("active=1")->limit(5)->sort('created')->order('desc')->get();
		$this->load->view('inc_index',$data);
	}
	function view_all($type_id){
		$data['type'] = $data['type'] = $this->type->get_row($type_id);
		$data['result'] = $this->download->where("type_id = $type_id and active=1")->sort('created')->order('desc')->get();
		$this->template->build('view_all',$data);
	}
	function download_file($type_id,$id)
	{
		$file=$this->download->get_one("files","id",$id);
		$this->load->helper('download');
		$data = file_get_contents("uploads/download/$type_id/file/".basename($file));
		$name = basename($file);
		force_download($name, $data);
	}
}
?>