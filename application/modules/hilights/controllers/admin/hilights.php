<?php
class Hilights extends  Admin_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('hilights_model','hilight');
	}
	function index()
	{
		$this->template->append_metadata(js_checkbox());
		$data['result'] = $this->hilight->get();
		$data['pagination'] = $this->hilight->pagination();
		$this->template->build('admin/index',$data);
	}
	function form($id = FALSE)
	{
		$data['rs'] = $this->hilight->get_row($id);
		$this->template->build('admin/form',$data);
	}
	function save()
	{
		if($_POST)
		{
			if($_POST['active']==''){$_POST['active']=1;}
			if($_POST['id'])$_POST['user_id'] = $this->session->userdata('id');
			if($_FILES['image']['name'])
			{
				if($_POST['id']){
					$this->hilight->delete_file($_POST['id'],'uploads/hilight','image');
				}
				$_POST['image'] = $this->hilight->upload($_FILES['image'],'uploads/hilight/');
			}
			$this->hilight->save($_POST);
			set_notify('success', SAVE_DATA_COMPLETE);
		}
		redirect('hilights/admin/hilights');
	}
	function delete($id)
	{
		if($id){
			$this->hilight->delete($id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect('hilights/admin/hilights');
	}
}
?>