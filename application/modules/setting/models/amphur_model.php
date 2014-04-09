<?php
class Amphur_model extends  MY_Model{
	public $table ="f_amphur";
	public $select = "f_amphur.*,province_name";
	public $join = "LEFT JOIN f_province ON f_amphur.province_id = f_province.id";
	function __construct(){
		parent::__construct();
	}
}
?>