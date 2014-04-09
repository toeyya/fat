<?php
class Agency extends  Admin_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('agency_model','agency');
	}

	function index()
	{
		$data['result'] = $this->agency->get();
		$data['pagination'] = $this->agency->pagination();
		$this->template->build('agency/admin/index',$data);
	}
	function form($id=FALSE){
		$data['rs'] = $this->agency->get_row("f_agency.id",$id);
		$this->template->build('agency/admin/form',$data);
	}
	function delete(){
		$this->template->build('agency/admin/index');
	}
}
?>