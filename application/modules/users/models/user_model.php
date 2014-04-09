<?php
class User_model extends MY_Model
{
	public $table="f_users";
	public $select ="f_users.*,firstname,lastname,phone,province_name,amphur_name,district_name,position,address";
	public $join ="LEFT JOIN f_profiles ON user_id = f_users.id
				   LEFT JOIN f_province ON f_province.id = f_users.province_id
				   LEFT JOIN f_amphur ON f_amphur.id = f_users.amphur_id
				   LEFT JOIN f_district ON f_district.id = f_users.district_id";
	function __construct()
	{
		parent::__construct();
	}
}
?>