<?php
class Content extends Public_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('content_model','content');
		$this->load->model('categories_model','cat');



	}
	function index($category_id,$layout=FALSE)
	{//$this->db->debug = true;
		$data['contents'] = $this->content->select('contents.*,firstname,lastname')
										->join("LEFT JOIN f_profiles on f_profiles.user_id=contents.user_id")
										->where(" category_id='".$category_id."'")
										->sort("id")->order("desc")->get();
		$data['pagination']=$this->content->pagination();
		$data['category_id']=$category_id;
		$data['category']=$this->cat->get_row($category_id);
		$structure = $data['category']['structure'];
 		if($structure=="page"){
			$data['contents']=$this->content->get_row("category_id",$category_id);
			$this->template->build('content_page',$data);
		}else if($structure=="contact"){
			$this->template->build('content_contact',$data);
		}else{
			$this->template->build('inc_index',$data);
		}

	}

	function view($category_id,$id)
	{
		$this->content->counter($id);
		$data['result']=$this->content->get_row($id);
		$data['category_id']=$category_id;
		$data['category'] = $this->cat->get_row($category_id);
		$this->template->build('view',$data);
	}

	function search()
	{
		if(isset($_GET['search'])){$where = " and title like '%".$_GET['search']."%' "; $data['search'] = $_GET['search'];}else{$where=' ';}

		$data['result'] = $this->content->limit(20)->get("SELECT contents.* FROM contents JOIN categories ON contents.cat_id= categories.id WHERE type = 'content' and active='1' ".$where." ORDER BY contents.created desc,contents.id DESC");

		$data['pagination'] = $this->content->pagination();

		$this->template->build('search',$data);

	}



	function view_all($id)
	{//sysdate()
		$data['result']=$this->content->where("category_id=$id and active = '1'")->sort("id")->order("desc")->limit(10)->get();
		$data['category']  = $this->cat->get_row($id);
		$data['pagination'] = $this->content->pagination();
		$this->template->build('inc_index',$data);
	}

	function inc_information($category_id)
	{//GETDATE()
		$data['result']=$this->content->where("category_id=$category_id and active = '1'")->sort("id")->order("desc")->limit(4)->get();
		$data['category_id'] =$category_id;
		$this->load->view('inc_information',$data);
	}

	function download($id)
	{
		//$content = new Content($id);
		$file=$this->content->get_one("files","id",$id);
		$this->load->helper('download');
		$data = file_get_contents("uploads/content/download/".basename($file));
		$name = basename($file);
		force_download($name, $data);
	}

}
?>