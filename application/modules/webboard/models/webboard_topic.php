<?php
/**
 * Webboard Topic
 */
class Webboard_Topic extends MY_Model {
	
	var $table = "webboard_topics";
	
	var $has_many = array("webboard_comment");
	
	function __construct($id=NULL) {
		parent::__construct($id);
	}
}
