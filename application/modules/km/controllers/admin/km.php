<?php
class Km extends Admin_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('km_model','km');
		$this->load->model('type_model','type');
	}
	function index($type_id)
	{
		if(!permission('km','act_read')){
			redirect('admin');
		}
		$this->template->append_metadata(js_checkbox());
		$data['type_id'] = $type_id;
		$data['type'] = $this->type->get_row("id",$type_id);
		$data['result'] = $this->km->select("f_km_detail.*,agency_name")
										 ->join("LEFT JOIN f_users ON f_users.id = user_id")
										 ->where("type_id =".$type_id)->sort("")->order("f_km_detail.id desc")->get();
		$data['pagination'] = $this->km->pagination();
		$structure = $data['type']['structure'];
		if($structure=="page"){
			redirect('km/admin/km/form/'.$type_id.'/'.$data['result'][0]['id']);
		}else if($structure=="list"){
			$this->template->build('km/admin/index',$data);
		}

	}
	function form($type_id,$id = FALSE)
	{
		if(!permission('act_update') && !permission('act_create')){
			redirect('admin');
		}
		$data['type_id'] = $type_id;
		$data['type'] = $this->type->get_row("id",$type_id);
		$data['rs'] = $this->km->get_row($id);
		$this->template->build('km/admin/form',$data);
	}
	function save($type_id)
	{
		if($_POST)
		{
			if($_POST['active']==''){$_POST['active']=1;}
			$_POST['user_id'] = $this->session->userdata('id');
			$id = $this->km->save($_POST);

			if(@$_FILES['image']['name'])
			{

				if(image_extension(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION))){
					$this->km->delete_file($id,'uploads/km/'.$type_id,'image');
					$this->km->delete_file($id,'uploads/km/'.$type_id.'/thumbnail/','image');

					$this->km->save(array('id' => $id, 'image' => $this->km->upload($_FILES['image'],'uploads/km/'.$type_id,false,600,300)));
					$this->km->thumb('uploads/km/'.$type_id.'/thumbnail/',275,180);
				}
			}

			if(@$_FILES['files']['name'])
			{
				if(file_extension(pathinfo($_FILES['files']['name'], PATHINFO_EXTENSION))){
					$this->km->delete_file($id,'uploads/km/'.$type_id.'/file','files');
					$this->km->save(array('id'=>$id,'files'=>$this->km->upload($_FILES['files'],'uploads/km/'.$type_id.'/file')));
				}
			}

			set_notify('success', SAVE_DATA_COMPLETE);
		}
		if($_POST['structure']=="list"){
			redirect('km/admin/km/index/'.$_POST['type_id']);
		}else{
			redirect('km/admin/km/form/'.$type_id.'/'.$_POST['type_id']);
		}

	}
	function download($id,$field="files")
	{
		$file = $this->km->get_one($field,"id",$id);
		$this->load->helper('download');
		$data = file_get_contents("uploads/km/".basename($file));
		$name = basename($file);
		force_download($name, $data);
	}
	function delete($id)
	{
		if(!permission('km','act_delete')){
			redirect('admin');
		}
		if($id)
		{
			$this->km->delete("type_id",$id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect('km/admin/km/index');
	}
}
?>