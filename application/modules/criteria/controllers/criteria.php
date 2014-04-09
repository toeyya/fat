<?php
class Criteria extends  Flat_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->model('criteria_model','criteria');
		$this->load->model('users/user_model','user');
		$this->load->model('setting/province_model','province');
		$this->load->model('setting/amphur_model','amphur');
		$this->load->model('setting/district_model','district');
		$this->load->model('criteria_month_model','cmonth');
		$this->load->model('setting/agency_type_model','agency_type');
	}
	function index()
	{//$this->db->debug = true;
		$user_id   			= $this->session->userdata('id');
		$data['user'] 		= $this->user->get_row("f_users.id",$user_id);
		$data['province'] 	= $this->province->get_one("province_name",'id',$data['user']['province_id']);
		$data['amphur'] 	= $this->amphur->get_one('amphur_name','id',$data['user']['amphur_id']);
		$data['district'] 	= $this->district->get_one('district_name','id',$data['user']['district_id']);
		$data['agency_type']= $this->agency_type->get_one("name",'id',$data['user']['agency_type']);
		$data['rs']			= $this->criteria->where("user_id = $user_id")->sort("title_id")->order("asc")->get();
		$this->template->set_layout('blank');
		$this->template->build('index',$data);

	}
	function form($id=FALSE)
	{//$this->db->debug = true;
		$m = (int)date('m');
		$wh = (!empty($_GET['month'])) ? " and month=".$_GET['month']:' and month='.$m;
		$user_id  = (empty($id)) ?'': $this->session->userdata('id');
		$user_id = $this->session->userdata('id');
		$data['title'] = array('1'=>'1.การประชุมต่างๆในองค์กร ','2'=>'2. การแถลงนโยบายองค์กร','3'=>'3.รณรงค์ประชาสัมพันธ์ในองค์กร/สื่อท้องถิ่นต่างๆ'
					   ,'4'=>'4. ตรวจสุขภาพ วัดเอว น้ำหนัก ส่วนสูง และพฤติกรรมการบริโภค','5'=>'5.อบรมสมาชิกองค์กร/แกนนำพี่เลี้ยง','6'=>'6.ถ่ายทอดองค์ความรู้แก่องค์กรเพครือข่าย/การศึกษาดูงาน'
					   ,'7'=>'7.การจัดสภาพแวดล้อมที่เอื้อต่อ 3อ.','8'=>'8.การจัดเวทีชาวบ้าน/การถอดบทเรียน','9'=>'9.นวัตกรรมที่เกิดขึ้นในองค์กร','10'=>'10. นโยบายสาธารณสะที่เกิดขึ้นในองค์กร');
		$data['result']   = $this->cmonth->where("user_id = $user_id $wh")->sort("title_id")->order("asc")->get();
		$this->template->set_layout('blank');
		$this->template->build('form',$data);
	}
	function index2()
	{	//$this->db->debug=true;
		$user_id = $this->session->userdata('id');
		$year = date('Y');$yy = $year-1;$yy_end = $year;
		if(!empty($_GET['year'])){$yy = $_GET['year']-1;$yy_end = $_GET['year'];}
		$wh =" and date(c.created) between '$yy-10-01' and '$yy_end-09-30'";
		$wh.=(empty($_GET['month'])) ? '':" and month =".$_GET['month'];
		$sql = "SELECT c.id,c.user_id,c.created,month,firstname,lastname from f_criteria_month c
				LEFT JOIN f_profiles ON f_profiles.user_id = c.user_id
				WHERE c.user_id = $user_id $wh
				GROUP BY month,user_id ORDER BY month,c.id asc";
		$data['result'] = $this->cmonth->get($sql,true);
		$this->template->set_layout('blank');
		$this->template->build('index2',$data);
	}
	function save()
	{$this->db->debug = true;

		if($_POST){
			$_POST['user_id'] = $this->session->userdata('id');
			for($i=1;$i<15;$i++){
				$_POST['id']       = (empty($_POST['id'.$i])) ? '':$_POST['id'.$i];
				$_POST['title_id'] = $i;
				$_POST['evidence'] = (empty($_POST['evidence'.$i])) ? '':$_POST['evidence'.$i];
				$_POST['doc_name'] = (empty($_POST['doc_name'.$i])) ? '':$_POST['doc_name'.$i];
				$_POST['result']   = (empty($_POST['result'.$i]))   ? '':$_POST['result'.$i];
				$_POST['file_name']= (empty($_POST['file_name'.$i]))? '':$_POST['file_name'.$i];
				$id = $this->criteria->save($_POST);
				if(@$_FILES['file'.$i]['name'])
				{
					if(file_extension(pathinfo($_FILES['file'.$i]['name'], PATHINFO_EXTENSION))){
						$this->criteria->delete_file($id,'uploads/criteria','files');
						$this->criteria->save(array('id'=>$id,'files'=>$this->criteria->upload($_FILES['file'.$i],'uploads/criteria')));
					}
				}
			}
			//set_notify('success',SAVE_DATA_COMPLETE);
		}
		//redirect('criteria/index');
	}
	function save2()
	{
		if($_POST){
			$_POST['user_id'] = $this->session->userdata('id');
			for($i=1;$i<11;$i++){
				$_POST['title_id'] = $i;
				$_POST['id']       = (empty($_POST['id'.$i])) ? '':$_POST['id'.$i];
				$_POST['activity'] = (empty($_POST['activity'.$i])) ? '':$_POST['activity'.$i];
				$_POST['product']  = (empty($_POST['product'.$i]))  ? '':$_POST['product'.$i];
				$_POST['problem']  = (empty($_POST['problem'.$i]))  ? '':$_POST['problem'.$i];
				$_POST['recommand']= (empty($_POST['recommand'.$i]))? '':$_POST['recommand'.$i];
				$id = $this->cmonth->save($_POST);
				if(@$_FILES['image1_'.$i]['name'])
				{
					if(image_extension(pathinfo($_FILES['image1_'.$i]['name'], PATHINFO_EXTENSION))){
						$this->cmonth->delete_file($id,'uploads/criteria/image','image1');
						$this->cmonth->save(array('id'=>$id,'image1'=>$this->cmonth->upload($_FILES['image1_'.$i],'uploads/criteria/image')));
						$this->cmonth->thumb('uploads/criteria/image/thumbnail',275,180);

					}
				}
				if(@$_FILES['image2_'.$i]['name'])
				{
					if(image_extension(pathinfo($_FILES['image2_'.$i]['name'], PATHINFO_EXTENSION))){
						$this->cmonth->delete_file($id,'uploads/criteria/image','image2');
						$this->cmonth->save(array('id'=>$id,'image2'=>$this->cmonth->upload($_FILES['image2_'.$i],'uploads/criteria/image')));
						$this->cmonth->thumb('uploads/criteria/image/thumbnail',275,180);
					}
				}
				if(@$_FILES['image3_'.$i]['name'])
				{
					if(image_extension(pathinfo($_FILES['image3_'.$i]['name'], PATHINFO_EXTENSION))){
						$this->cmonth->delete_file($id,'uploads/criteria/image','image1');
						$this->cmonth->save(array('id'=>$id,'image3'=>$this->cmonth->upload($_FILES['image3_'.$i],'uploads/criteria/image')));
						$this->cmonth->thumb('uploads/criteria/image/thumbnail',275,180);
					}
				}

			}
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('criteria/index2');
	}
	function download($id,$field="files")
	{
		$file = $this->criteria->get_one($field,"id",$id);
		$this->load->helper('download');
		$data = file_get_contents("uploads/criteria/".basename($file));
		$name = basename($file);
		force_download($name, $data);
	}
	function delete($id)
	{
		if($id){
			$this->db->Execute("UPDATE f_criteria SET files='',file_name='' WHERE id = ? ",$id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect('criteria/index');
	}
	function delete_row($id){
		if($id){
			$this->cmonth->delete($id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect('criteria/index2');
	}
	function delete_file(){
		if(!empty($_GET['id']) && !empty($_GET['field'])){
			$field = $_GET['field'];
			$this->db->Execute("UPDATE f_criteria_month SET $field ='' WHERE id = ? ",$_GET['id']);
		}
	}

}
?>