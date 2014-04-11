<?php
class Albums extends Public_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('album_model','album');
		$this->load->model('picture_model','picture');

	}
	function index()
	{
		$sql = "SELECT f_pictures.image,album_id,agency_name,province_name,amphur_name,district_name,user_id
				FROM f_albums LEFT JOIN f_pictures ON f_albums.id = f_pictures.album_id
				left join f_users ON f_albums.user_id = f_users.id
				left join f_province ON f_users.province_id = f_province.id
				left join f_amphur ON f_users.amphur_id = f_amphur.id
				left join f_district ON f_users.district_id = f_district.id
				where f_albums.active=1
				group by album_id order by f_albums.created desc";
		$data['result'] = $this->db->GetArray($sql);
		$this->load->view('inc_index',$data);
	}
	function view($album_id,$user_id)
	{
		$sql = "SELECT agency_name,province_name,amphur_name,district_name FROM f_users
				left join f_province ON f_users.province_id = f_province.id
				left join f_amphur ON f_users.amphur_id = f_amphur.id
				left join f_district ON f_users.district_id = f_district.id where f_users.id=$user_id";
		$data['user'] = $this->db->GetRow($sql);
		$data['result'] = $this->picture->where("album_id = $album_id")->sort("created")->order("desc")->get();
		$this->template->set_layout('blank');
		$this->template->build('inc_view',$data);
	}
	function view_all()
	{//$this->db->debug = true;
		$sql = "SELECT f_pictures.image,album_id,agency_name,province_name,amphur_name,district_name,user_id,f_albums.name
				FROM f_albums LEFT JOIN f_pictures ON f_albums.id = f_pictures.album_id
				left join f_users ON f_albums.user_id = f_users.id
				left join f_province ON f_users.province_id = f_province.id
				left join f_amphur ON f_users.amphur_id = f_amphur.id
				left join f_district ON f_users.district_id = f_district.id
				where f_albums.active=1
				group by album_id order by f_albums.created desc";
		$data['result'] = $this->db->GetArray($sql);
		$this->template->set_layout('blank');
		$this->template->build('inc_all',$data);
	}
}
?>