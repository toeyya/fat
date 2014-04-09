<?php
class F_weight_model extends MY_Model
{
	public $table="f_weight";
	public $join =" LEFT JOIN f_weight_detail ON f_weight.id = weight_id";
	public $select = "f_weight.id as main_id,fullname,age,gender,user_id,f_weight_detail.id as detail_id,f_weight_detail.*";
	function __construct()
	{
		parent::__construct();
	}
}
?>