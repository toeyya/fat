<?php
class F_behavior_model extends MY_Model
{
	public $table ="f_behavior";
	public $join  =" LEFT JOIN f_behavior_detail ON f_behavior.id = f_behavior_detail.behavior_id";
	public $select="f_behavior_detail.*,f_behavior_detail.id as detail_id,fullname,age,gender,user_id,f_behavior.id as main_id";
	function __construct()
	{
		parent::__construct();
	}
}
?>