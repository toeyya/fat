<?php
class Agency_model extends MY_Model
{
	public $table ='f_agency';
	public $select ="f_agency.*,province_name,amphur_name,district_name";
	public $join ="LEFT JOIN f_province ON f_province.id = f_agency.province_id
				   LEFT JOIN f_amphur ON f_amphur.id = f_agency.amphur_id
				   LEFT JOIN f_district ON f_district.id = f_agency.district_id";

	function __construct()
	{
		parent::__construct();
	}
}
?>