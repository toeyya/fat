<?php
class Km extends Admin_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('km_model','km');
		$this->load->model('type_model','type');
	}
	function index($type_id)
	{
		$data['type_id'] = $type_id;
		$data['type_name'] = $this->type->get_one("name","id",$type_id);
		$data['result'] = $this->km->select("f_km_detail.*,agency_name")
										 ->join("LEFT JOIN f_users ON f_users.id = user_id")
										 ->where("type_id =".$type_id)->sort("")->order("f_km_detail.id desc")->get();
		$data['pagination'] = $this->km->pagination();
		$this->template->build('km/admin/index',$data);
	}
	function form($id = FALSE)
	{
		$data['rs'] = $this->km->get_row($id);
		$this->template->build('km/admin/form',$data);
	}
}
?>