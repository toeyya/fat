<?php
/**
 * Webboard
 */
class Webboard extends Public_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model("webboard_comment","comment");
		$this->load->model("webboard_topic","topic");
	}
	
	public function index() {
		$data["variable"] = $this->topic->where("webboard_group_id = 2")->where("status = 1")->sort("updated")->order("desc")->get();
		$data["pagination"] = $this->topic->pagination();
		$this->template->build("index",$data);
	}
	
	public function view($id) {
		if($id) {
			$data["value"] = $this->topic->get_row($id);
			
			if($data["value"]["id"]==FALSE) {
				redirect("webboard");
			}
			
			if($data["value"]["webboard_group_id"]==1) {
				redirect("forum/view/$id");
			} else {
				$data["variable"] = $this->comment->where("webboard_topic_id = $id AND status = 1")->sort("created")->order("asc")->get();
				$this->topic->counter($id,"view");
				$data["pagination"] = $this->comment->pagination();
				$this->template->build("view",$data);
			}
		}
	}
	
	public function form() {
		if(login_data("id")) {
			$this->template->build("form");
		} else {
			redirect("webboard");
		}
	}
	
	public function save() {
		if(login_data("id")) {
			if($_POST) {
				$_POST["detail"] = nl2br($_POST["detail"]);	
				
				$_POST["webboard_group_id"] = 2;
				$_POST["user_id"] = login_data("id");
				$_POST["email"] = login_data("email");
				$_POST["status"] = 1;
				$_POST["created"] = date("Y-m-d H:i:s");
				$_POST["updated"] = date("Y-m-d H:i:s");
				$this->topic->save($_POST);
			}
		}
		redirect("webboard");
	}
	
	public function comment($id) {
		if($id) {
			$_POST["detail"] = nl2br($_POST["detail"]);	
			
			$_POST["webboard_topic_id"] = $id;
			$_POST["user_id"] = login_data("id");
			$_POST["email"] = login_data("email");
			$_POST["status"] = 1;
			$_POST["created"] = date("Y-m-d H:i:s");
			$_POST["updated"] = date("Y-m-d H:i:s");
			$this->comment->save($_POST);
			$this->topic->counter($id,"comment");
			redirect("webboard/view/$id");
		}
	}
	
}
