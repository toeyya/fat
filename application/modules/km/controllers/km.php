<?php
class Km extends Public_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('km_model','km');
		$this->load->model('type_model','type');
	}
	function index(){
		$data['result'] = $this->type->where("active ='1'")->sort('id')->order('desc')->get();
		$this->template->build('inc_index',$data);
	}
	function view_all($type_id){
		$data['type'] = $this->type->get_row($type_id);
		$data['km'] = $this->km->where("active='1' and type_id = $type_id")->sort("id")->order("desc")->get();
		$this->template->build('view_all',$data);
	}
	function view($type_id,$id){
		$this->km->counter($id);
		$data['type'] = $this->type->get_row($type_id);
		$data['km'] = $this->km->get_row($id);
		$this->template->build('view',$data);
	}
	function download($id)
	{
		//$content = new Content($id);
		$file=$this->content->get_one("files","id",$id);
		$this->load->helper('download');
		$data = file_get_contents("uploads/km/download/".basename($file));
		$name = basename($file);
		force_download($name, $data);
	}
}
?>