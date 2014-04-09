<?php
class Users extends  Public_Controller{
	function __construct(){
		parent:__construct();
	}
	function index(){
		$this->template->build('inc_index');
	}
}
?>