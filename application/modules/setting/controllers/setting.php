<?php
class Setting extends Public_Controller{
	function __construct(){
		parent::__construct();
	}
	function getAmphur()
	{
		echo form_dropdown('amphur_id',get_option('id','amphur_name','f_amphur'," province_id =".$_GET['province_id'],'amphur_name asc'),'','','กรุณาระบุ');
	}
	function getDistrict()
	{
	   echo form_dropdown('district_id',get_option('id','district_name','f_district',"  amphur_id =".$_GET['amphur_id'],'district_name asc'),'','','กรุณาระบุ');
	}
}
?>
