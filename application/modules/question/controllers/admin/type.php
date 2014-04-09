<?php
class Type extends  Admin_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$this->template->build('admin/type/index');
	}
	function form(){
		$this->template->build('admin/type/form');
	}
	function save(){

	}
	function delete(){

	}
}
?>