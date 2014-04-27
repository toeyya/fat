<?php
class Province extends Admin_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('province_model','province');
		$this->load->model('area_model','area');
	}
	function index()
	{
		if(!permission('setting','act_read')){
			redirect('admin');
		}
		$data['result'] = $this->province->sort("province_name")->order("asc")->get();
		$data['pagination'] = $this->province->pagination();
		$this->template->build('province/admin/index',$data);
	}
	function form($id=FALSE)
	{
		if(!permission('setting','act_update') && !permission('setting','act_create')){
			redirect('admin');
		}
		$data['rs'] = $this->province->get_row($id);
		$data['area'] = $this->area->select("f_area_detail.id,area_id,area_no,name")
		                           ->join("LEFT JOIN f_area_detail ON f_area.id = f_area_detail.area_id")
								   ->where("province_id =".$id)
								   ->sort("area_id")->order("asc")->get();
		$this->template->build('province/admin/form',$data);
	}
	function save(){
		if($_POST){
			$this->province->save($_POST);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('setting/admin/province');
	}
	function delete($id)
	{
		if(!permission('setting','act_delete')){
			redirect('admin');
		}
		if($id){
			$this->province->delete($id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect('setting/admin/province');
	}
}
?>