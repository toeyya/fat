<?php
/**
 * Webboard_Group
 */
class Webboard_Group extends MY_Model {
	
	var $table = "webboard_groups";
	
	var $has_many = array("webboard_topic");
	
	function __construct($id=NULL) {
		parent::__construct($id);
	}
}
