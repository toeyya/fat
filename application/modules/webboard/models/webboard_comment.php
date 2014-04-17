<?php
/**
 * Webboard_Comment
 */
class Webboard_Comment extends MY_Model {
	
	var $table = "webboard_comments";
	
	var $has_one = array("webboard_topic");
	
	function __construct($id=NULL) {
		parent::__construct($id);
	}
}
