<?php
class Albums extends Admin_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('album_model','album');
		$this->load->model('picture_model','picture');
		$this->load->model("forum/webboard_topic","topic");

	}
	function index()
	{
		if(!permission('album','act_read')){
			redirect('admin');
		}
		$this->template->append_metadata(js_lightbox());
		$this->template->append_metadata(js_checkbox());
		$data['result'] = $this->album->select("f_albums.id,f_albums.active,name,agency_name")
									  ->join("LEFT JOIN f_users ON f_users.id = user_id")
									  ->sort("")->order("f_albums.id desc")->get();
		$data['pagination'] = $this->album->pagination();
		$this->template->build('admin/index',$data);
	}
	function form($id=FALSE)
	{
		if(!permission('album','act_update') && !permission('album','act_create')){
			redirect('admin');
		}
		$data['picture'] = $this->picture->where("album_id = '$id'")->get();
		$data['rs']= $this->album->get_row($id);
		$this->template->build('admin/form',$data);
	}
	function save()
	{//$this->db->debug=true;
		if($_POST)
		{
			$_POST['user_id'] = $this->session->userdata('id');
			$album_id =$this->album->save($_POST);
			fix_file($_FILES['image']);
			foreach($_FILES['image'] as $key => $image)
			{
				if($image['name'])
				{
					if(!empty($_POST['picture_id'][$key]))
					{
					$this->picture->delete_file('uploads/albums/'.$album_id,'image');
					$this->picture->delete_file('uploads/albums/thumbnail/'.$album_id,'image');
					}

					$data['image'] = $this->picture->upload($image,'uploads/albums/'.$album_id);
					$this->picture->thumb('uploads/albums/'.$album_id.'/thumbnail',275,180);
					$data['album_id'] = $album_id;
					$data['title'] = $_POST['title'][$key];
					$this->picture->save($data);
				}
			}
			set_notify('success', SAVE_DATA_COMPLETE);
		}
		redirect('albums/admin/albums/form/'.$album_id);
	}
	function delete_pic(){
		if(!empty($_GET['id'])){
			$this->picture->delete($_GET['id']);
		}
	}
	function delete($id){
		if(!permission('album','act_delete')){
			redirect('admin');
		}
		if($id){
			$this->picture->delete("album_id",$id);
			$this->album->delete($id);
			set_notify('success', DELETE_DATE_COMPLETE);
		}
		redirect('albums/admin/albums');

	}
}
?>