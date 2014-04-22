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
	function getProvince(){
		$sql ="select province_id,province_name from f_area_detail
			   left join f_province ON f_province.id = province_id
			   where area_no=".$_GET['area_no']." and area_id=2 order by province_name";
		$result = $this->db->GetArray($sql);
		echo '<select name="province_id" class="search-query">';
		echo '<option value="">เลือกจังหวัด</option>';
		foreach($result as $item){
			echo '<option value="'.$item['province_id'].'">'.$item['province_name'].'</option>';
		}
		echo '</select>';
	}
	function getAgency(){
		echo form_dropdown('user_id',get_option('id','agency_name','f_users','province_id='.$_GET['province_id'],'agency_name'),'','class="search-query"','เลือกองค์กร');
	}
}
?>
