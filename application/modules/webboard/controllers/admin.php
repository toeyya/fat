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
		$data["variable"] = $this->topic->where("webboard_group_id = 2")->get();
		$data["pagination"] = $this->topic->pagination();
		$this->template->build("admin/index",$data);
	}
	
	public function form($id) {
		$data["value"] = $this->topic->get_row($id);
		
		if($data["value"]["webboard_group_id"]==1) {
			redirect("forum/admin/$id");
		}
		
		$data["variable"] = $this->comment->where("webboard_topic_id",$id)->get();
		$this->template->build("admin/form",$data);
	}
	
	public function save($id) {
		if($_POST) {
			$data = array(
				"id"	=>	$id,
				"title"	=>	$_POST["title"],
				"detail"	=>	$_POST["detail"],
				"updated"	=>	date("Y-m-d H:i:s")
			);
			$this->topic->save($data);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect("webboard/admin");
	}
	
	public function delete($id) {
		if($id) {
			$this->topic->delete($id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect("webboard/admin");
	}
	
	public function form_comment($id) {
		$data["value"] = $this->comment->get_row($id);
		$this->template->build("admin/form_comment",$data);
	}
	
	public function save_comment($id) {
		if($_POST) {
			$data = array(
				"id"	=>	$id,
				"title"	=>	$_POST["title"],
				"detail"	=>	$_POST["detail"],
				"updated"	=>	date("Y-m-d H:i:s")
			);
			$this->comment->save($data);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect("webboard/admin");
	}
	
	public function delete_comment($id) {
		if($id) {
			$this->comment->delete($id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect("webboard/admin");
	}
	
}
