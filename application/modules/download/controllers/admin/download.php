<?php
class Download extends Admin_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model("download_model",'download');
		$this->load->model('type_model','type');
	}
	function index()
	{
		if(!permission('download','act_read')){
			redirect('admin');
		}
		$this->template->append_metadata(js_lightbox());
		$this->template->append_metadata(js_checkbox());
		$data['type_id'] = $_GET['type_id'];
		$data['type_name'] = $this->type->get_one("name","id",$_GET['type_id']);
		$data['result'] = $this->download->select("f_download_detail.*,agency_name")
										 ->join("LEFT JOIN f_users ON f_users.id = user_id")
										 ->where("type_id =".$_GET['type_id'])->sort("")->order("f_download_detail.id desc")->get();
		$data['count'] = $this->db->GetArray("select count(id) as type_id from f_download_detail group by type_id");
		$data['pagination'] = $this->download->pagination();
		$this->template->build('download/admin/index',$data);
	}
	function form($id = FALSE)
	{
		if(!permission('download','act_update') && !permission('download','act_create')){
			redirect('admin');
		}
		$data['type_id'] = $_GET['type_id'];
		$data['type'] = $this->type->get_row($_GET['type_id']);
		$data['rs'] = $this->download->get_row($id);
		$this->template->build('download/admin/form',$data);
	}
	function save($type_id)
	{
		if($_POST)
		{
			if($_POST['active']==''){$_POST['active']=1;}
			$id = $this->download->save($_POST);

			if(@$_FILES['image']['name'])
			{

				if(image_extension(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION))){
					$this->download->delete_file($id,'uploads/download/'.$type_id,'image');
					$this->download->delete_file($id,'uploads/download/'.$type_id.'/thumbnail/','image');

					$this->download->save(array('id' => $id, 'image' => $this->download->upload($_FILES['image'],'uploads/download/'.$type_id)));
					$this->download->thumb('uploads/download/'.$type_id.'/thumbnail/',false,600,300);
				}
			}

			if(@$_FILES['files']['name'])
			{
				if(file_extension(pathinfo($_FILES['files']['name'], PATHINFO_EXTENSION))){
					$this->download->delete_file($id,'uploads/download/'.$type_id.'/file','files');
					$this->download->save(array('id'=>$id,'files'=>$this->download->upload($_FILES['files'],'uploads/download/'.$type_id.'/file')));
				}
			}

			set_notify('success', SAVE_DATA_COMPLETE);
		}
		redirect('download/admin/download/index?type_id='.$_POST['type_id']);
	}
	function delete($id,$type_id)
	{
		if(!permission('download','act_delete')){
			redirect('admin');
		}
		if($id){
			$this->download->delete($id);
			set_notify('success', SAVE_DATA_COMPLETE);
		}
		redirect('download/admin/download/index/'.$type_id);

	}
	function delete_file()
	{
		$this->download->delete_file($_GET['id'],'uploads/download/'.$_GET['type_id'].'/file',$_GET['field']);
		$this->download->save(array('id'=>$_GET['id'],$_GET['field']=>''));
	}
}
?>