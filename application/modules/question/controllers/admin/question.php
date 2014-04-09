<?php
class Question extends  Admin_Controller{
	function __construct(){
		parent::__construct();
	}
	function index(){
		$data['result'] = $this->question->get();
		$this->template->build('question/admin/question/index');
	}
}
?>