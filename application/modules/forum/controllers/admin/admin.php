<?php
/**
 * Admin
 */
class Admin extends Admin_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model("users/user_model","user");
		$this->load->model("webboard_topic","topic");
		$this->load->model("webboard_comment","comment");
	}

	public function index() {
		$data["variable"] = $this->topic->get();
		$data["pagination"] = $this->topic->pagination();
		$this->template->build("admin/index",$data);
	}

	public function form($id) {
		$data["value"] = $this->topic->get_row("webboard_topic.id",$id);
		$data["variable"] = $this->comment->where("webboard_topic_id",$id)->get();
	}

	public function save($id) {
		if($_POST) {
		}
	}

}
