<?php
/**
 * Forum Controllers
 */
class Forum extends Public_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->model("webboard_comment","comment");
		$this->load->model("webboard_topic","topic");
	}
	
	public function index() {
		$data["variable"] = $this->topic->where("status = 1")->sort("updated")->order("desc")->get();
		$data["pagination"] = $this->topic->pagination();
		$this->template->build("index",$data);
	}
	
	public function view($id) {
		if($id) {
			$data["value"] = $this->topic->get_row($id);
			$data["variable"] = $this->comment->where("webboard_topic_id = $id AND status = 1")->sort("created")->order("asc")->get();
			$data["pagination"] = $this->comment->pagination();
			$this->template->build("view",$data);
		}
	}
	
	public function comment($id) {
		if($id) {
			$_POST["webboard_topic_id"] = $id;
			$_POST["user_id"] = login_data("id");
			$_POST["email"] = login_data("email");
			$_POST["status"] = 1;
			$_POST["created"] = date("Y-m-d H:i:s");
			$_POST["updated"] = date("Y-m-d H:i:s");
			$this->comment->save($_POST);
			redirect("forum/view/$id");
		}
	}
	
}
