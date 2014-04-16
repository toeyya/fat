<?php
class Content extends Admin_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('content_model','content');
		$this->load->model('categories_model','category');
		$this->template->append_metadata(js_checkbox());
	}

	function index($category_id=FALSE,$id=FALSE)
	{//$this->db->debug=true;
		$title =(!empty($_GET['title'])) ? " and contents.title like '%".$_GET['title']."%'":'';
		$data['result'] = $this->content->select('contents.*,firstname,lastname')
										->join("LEFT JOIN f_profiles on f_profiles.user_id=contents.user_id")
										->where(" category_id='".$category_id."'".$title)
										->sort("")->order("queue")->get();
		$data['pagination']  = $this->content->pagination();
		$data['category_id'] = $category_id;
		$data['category']    = $this->category->get_row($category_id);
		$structure = $data['category']['structure'];
		if($category_id){

			$data['content']=$this->content->get_row("category_id",$category_id);
		}
		if($structure=="contact"){
			$this->template->build('admin/content_contact',$data);

		}else if($structure=="page"){
			$this->template->build('admin/content_page',$data);
		}else{
			$this->template->build('admin/content_index',$data);
		}
	}
	function form($category_id = FALSE,$id=FALSE)
	{
		//$this->db->debug = true;
		$data['rs'] = $this->content->get_row($id);
		$data['category_id']=$category_id;
		$data['category_name']=$this->category->get_one("name","id",$category_id);
		$this->template->build('admin/content_form',$data);
	}
	function save($category_id=FALSE)
	{//$this->db->debug= true;
		if($_GET)
		{
			if(isset($_GET['queue'])){
				foreach($_GET['queue'] as $key => $item)
				{
					$this->db->Execute("UPDATE contents SET queue='".$item."' WHERE id=".@$_GET['queueid'][$key]);
				}
				set_notify('success', SAVE_DATA_COMPLETE);
			}
			redirect('content/admin/content/index/'.$category_id);
		}
		if($_POST)
		{

			if(!empty($_POST['start_date']))$_POST['start_date'] = Date2DB($_POST['start_date']);	 else $_POST['start_date'] = date('Y-m-d');
			if(!empty($_POST['end_date']))$_POST['end_date'] = Date2DB($_POST['end_date']);	else $_POST['end_date'] = null;
			if(empty($_POST['user_id']))$_POST['user_id'] = $this->session->userdata('id');
			$_POST['category_id'] = $category_id;
			$id = $this->content->save($_POST);
			if(@$_FILES['image']['name'])
			{

				if(image_extension(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION))){
				$this->content->delete_file($id,'uploads/content/','image');
				$this->content->delete_file($id,'uploads/content/thumbnail/','image');

				$this->content->save(array('id' => $id, 'image' => $this->content->upload($_FILES['image'],'uploads/content/')));
				$this->content->thumb('uploads/content/thumbnail/',92,67,'x');
				}

			}
			if(@$_FILES['files']['name'])
			{
				if(file_extension(pathinfo($_FILES['files']['name'], PATHINFO_EXTENSION))){
					$this->content->delete_file($id,'uploads/content','files');
					$this->content->save(array('id'=>$id,'files'=>$this->content->upload($_FILES['files'],'uploads/content')));
				}
			}

			set_notify('success', SAVE_DATA_COMPLETE);
		}
		redirect('content/admin/content/index/'.$category_id);

	}
	function delete($id)
	{
		if($id)
		{
			$this->content->delete($id);
			set_notify('success', DELETE_DATA_COMPLETE);
		}
		//redirect('content/admin/content/index');
		redirect($_SERVER['HTTP_REFERER']);
	}
	function download($id,$field="files")
	{
		$file = $this->content->get_one($field,"id",$id);
		$this->load->helper('download');
		$data = file_get_contents("uploads/content/".basename($file));
		$name = basename($file);
		force_download($name, $data);
	}

	function delete_file()
	{
		$this->content->delete_file($_POST['id'],'uploads/content/',$_POST['field']);
		$this->content->save(array('id'=>$_POST['id'],$_POST['field']=>''));
		//$this->content->delete_file($id,'uploads/content/',$field);
		//$this->content->save(array('id'=>$id,$field=>''));
	}
}
?>