<?php
class District_model extends  MY_Model{
	public $table ="f_district";
	public $select = "f_district.*,amphur_name,province_name";
	public $join = "LEFT JOIN f_province ON f_district.province_id = f_province.id
					LEFT JOIN f_amphur ON f_district.amphur_id = f_amphur.id";
	function __construct(){
		parent::__construct();
	}
}
?>