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
		$this->load->model('criteria/people_model','people');
	}
	function index($time)
	{//$this->db->debug = true;
		$data['year'] = (empty($_GET['year'])) ?  date('Y')+543 :$_GET['year'];
		$data['time'] = $time;
		$user_id  = (empty($_GET['user_id'])) ? $this->session->userdata('id') :$_GET['user_id'];
		$year = " and year ='".$data['year']."'";
		$data['permission'] = $this->session->userdata('permission_id');
		$data['disable'] = ($data['permission']=="2") ? 'disabled="disabled"' :'';
		$data['user'] 		= $this->user->get_row("f_users.id",$user_id);
		$data['people']     = $this->people->get_row("user_id = $user_id  and year",$data['year']);
		if(!empty($data['people'])){
			$cnt  = $data['people']['people_male1']+$data['people']['people_female1'];
		}
		$data['agency_type']= $this->agency_type->get_one("name",'id',$data['user']['agency_type']);
		$data['rs']			= $this->criteria->where("user_id = $user_id $year")->sort("title_id")->order("asc")->get();


		// เช็คว่ามีการวัดรอบเอวครั้งที่ 2 หรือยัง
		$sql = "select time from f_weight left join f_weight_detail ON f_weight.id = weight_id where user_id = $user_id $year and time=2";
		$data['time2'] = $this->db->GetOne($sql);

		// มากกว่า 15 วัดเส็นรอบเอว
		$sql = "select count(*) as cnt,gender,time from f_weight left join f_weight_detail on f_weight.id = f_weight_detail.weight_id where age>=15 and user_id= $user_id  $year group by gender,time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){  $data['p1'][$item['gender']][$item['time']] = $item['cnt']; }

		// มากกว่า 15 วัดเส้นรอบเอวปกติ
		$sql = "select count(*) as cnt,gender,time from f_weight left join f_weight_detail on f_weight.id = f_weight_detail.weight_id where age>=15 and fat='ปกติ' and user_id= $user_id $year group by gender,time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){  $data['p2'][$item['gender']][$item['time']] = $item['cnt'];}

		//สมาชิกองค์กรอายุ 15 ปีขึ้นไป ที่มีรอบเอวเกิน สามารถลดรอบเอวได้
		$sql = "select count(user_id) as cnt,time from f_weight left join f_weight_detail on f_weight.id = weight_id where  fat='ปกติ' and age>=15  and f_weight.user_id= $user_id $year group by time order by time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){$t[$item['time']] = $item['cnt'];}
		if(!empty($t[1]) && !empty($t[2])){$data['auto_result1'] = ($t[1]<$t[2]) ? "1":"2";}
		//ร้อยละ 100 ของผู้มีรอบเอวปกติสามารถควบคุมรอบเอวอยู่ในเกณฑ์ปกติ,
		$sql = "select count(user_id) as cnt,time from f_weight left join f_weight_detail on f_weight.id = weight_id where  fat='ปกติ'  and f_weight.user_id= $user_id $year group by time order by time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){$t[$item['time']] = $item['cnt'];}
		if(!empty($t[1]) && !empty($t[2])){$data['auto_result2'] = ($t[1]==$t[2]) ? "1":"2";}

		//มีสมาชิกร่วมประเมินภาวะโภชนาการ ร้อยละ 80
		$sql = "select count(*) from f_weight left join f_weight_detail ON f_weight.id = f_weight_detail.weight_id where time=1 and user_id= $user_id $year";
		$test = $this->db->GetOne($sql);
		$result = (!empty($test) && !empty($cnt)) ? number_format(($test * 100)/$cnt,1):0;
		$data['auto_result3'] =($result >= 80.0) ?  "1":"2";

		//มีการประเมินภาวะโภชนาการกิน โดยการวัดก่อนและหลังในบุคคลคนเดียวกัน
		$sql = "select count(*) from
				(select fullname,time,user_id from f_weight left join f_weight_detail on f_weight.id = weight_id
				where time=1 and user_id=2 and year='2557') a
				inner join
				(select fullname,time,user_id from f_weight left join f_weight_detail on f_weight.id = weight_id
				where time=2 and user_id=2 and year='2557') b
				on a.fullname = b.fullname";
		$result = $this->db->GetOne($sql);
		$data['auto_result4'] = (empty($result)) ? "2":"1";

		//จำนวนข้อที่ผ่าน
		$sql = "select count(result) from f_criteria where result='1' and  user_id= $user_id $year";
		$data['pass'] = $this->db->GetOne($sql);
		$this->template->set_layout('criteria');
		$this->template->build('index',$data);

	}
	function form($id=FALSE)
	{//$this->db->debug = true;
		$m = (int)date('m');
		$wh = (!empty($_GET['month'])) ? " and month=".$_GET['month']:' and month='.$m;
		$id  = (empty($id)) ?  $this->session->userdata('id') :$id;
		$data['user'] = $this->user->get_row("f_users.id",$id);
		$data['title'] = array('1'=>'1.การประชุมต่างๆในองค์กร ','2'=>'2. การแถลงนโยบายองค์กร','3'=>'3.รณรงค์ประชาสัมพันธ์ในองค์กร/สื่อท้องถิ่นต่างๆ'
					   ,'4'=>'4. ตรวจสุขภาพ วัดเอว น้ำหนัก ส่วนสูง และพฤติกรรมการบริโภค','5'=>'5.อบรมสมาชิกองค์กร/แกนนำพี่เลี้ยง','6'=>'6.ถ่ายทอดองค์ความรู้แก่องค์กรเพครือข่าย/การศึกษาดูงาน'
					   ,'7'=>'7.การจัดสภาพแวดล้อมที่เอื้อต่อ 3อ.','8'=>'8.การจัดเวทีชาวบ้าน/การถอดบทเรียน','9'=>'9.นวัตกรรมที่เกิดขึ้นในองค์กร','10'=>'10. นโยบายสาธารณสะที่เกิดขึ้นในองค์กร');
		$data['result']   = $this->cmonth->where("user_id = $id $wh")->sort("title_id")->order("asc")->get();
		$this->template->set_layout('criteria');
		$this->template->build('form',$data);
	}
	function index2()
	{	//$this->db->debug=true;

		if($this->session->userdata('permission_id')=="2"){
			$user_id = $this->session->userdata('id');
			$wh = " and c.user_id = $user_id";
		}
		$wh = (!empty($_GET['user_id'])) ? " and c.user_id =".$_GET['user_id'] : '';
		$wh.=(empty($_GET['month'])) ? '':" and month =".$_GET['month'];

		$data['year'] = (empty($_GET['year'])) ? date('Y')+543 :$_GET['year'];
		/*$year = date('Y');$yy = $year-1;$yy_end = $year;
		if(!empty($_GET['year'])){$yy = $_GET['year']-1;$yy_end = $_GET['year'];}
		$wh =" and date(c.created) between '$yy-10-01' and '$yy_end-09-30'";*/

		$sql = "SELECT c.id,c.user_id,c.created,month,response_man,year
				from f_criteria_month c left join f_users ON f_users.id = c.user_id
				WHERE  1=1 $wh and year = '".$data['year']."'
				GROUP BY month,user_id ORDER BY month,c.id asc";
		$data['result'] = $this->cmonth->get($sql,true);
		$this->template->set_layout('criteria');
		$this->template->build('index2',$data);
	}
	function save($time)
	{
		if($_POST){
			if($this->session->userdata('permission_id')=="1"){
				$_POST['user_admin'] = $this->session->userdata('id');
			}else{
				$_POST['user_id'] = $this->session->userdata('id');
			}
			$this->people->save($_POST);
			$_POST['time'] = $time;
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
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('criteria/index/'.$time.'?year='.$_POST['year']);
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
	function download_image($id,$field="image"){
		$file = $this->cmonth->get_one($field,"id",$id);
		$this->load->helper('download');
		$data = file_get_contents("uploads/criteria/image/".basename($file));
		$name = basename($file);
		force_download($name, $data);
	}
	function delete($id)
	{
		if($id){
			$this->db->Execute("UPDATE f_criteria SET files='',file_name='' WHERE id = ? ",$id);
			set_notify('success',DELETE_DATA_COMPLETE);
		}
		redirect($_SERVER['HTTP_REFERER']);
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
	function report($print=FALSE)
	{ //$this->db->debug = true;
		// จำนวนประชากรทั้งครั้งที่ 1 + ครั้งที่ 2 ?
		$data['res'] = array(''=>'','1'=>'ผ่าน','2'=>'ไม่ผ่าน');
		$wh   = (!empty($_GET['user_id'])) ? " and user_id =".$_GET['user_id'] : '';
		$year = (!empty($_GET['year'])) ? $_GET['year']:date('Y')+543;
		$sql  =" select user_id,year,agency_name,area_no,province_name,people_male1+people_female1+people_male2+people_female2 as cnt
				from f_people
				left join f_users ON f_people.user_id = f_users.id
				left join f_area_detail ON f_area_detail.province_id = f_users.province_id
				left join f_province ON f_users.province_id = f_province.id
				where year is not null and permission_id=2 and area_id=2 and  f_people.year ='$year' $wh
				group by user_id, year order by user_id,year";
		$data['result'] = $this->people->get($sql);
		$data['pagination'] = $this->people->pagination();
		// จำนวนประาชการวัดเอว
		$sql = "select count(*) as cnt,user_id,year
				from f_weight left join f_weight_detail ON f_weight.id =weight_id
				left join f_users ON f_weight.user_id = f_users.id
				where permission_id=2 $wh
				group by user_id,year order by user_id,year";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['user'][$item['user_id']] = $item['cnt'];
		}
		// จำนวนวัดรอบเอวปกติ
		$sql = "select count(*) as cnt,user_id,year
				from f_weight left join f_weight_detail ON f_weight.id =weight_id
				left join f_users ON f_weight.user_id = f_users.id
				where permission_id=2 and fat='ปกติ' $wh
				group by user_id,year order by user_id,year";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['fat'][$item['user_id']] = $item['cnt'];
		}
		$sql = "select  title_id,user_id,result from f_criteria  where year = $year $wh group by user_id,year,title_id,result order  by user_id,year,title_id";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['criteria'][$item['user_id']][$item['title_id']] = $item['result'];
		}

		if($print=="preview"){
			$this->template->set_layout('report');
			$this->template->build('report/report',$data);
		}else if($print=="export"){
			$filename= "รายงานตามตัวชี้วัด  กพร._".date("Y-m-d_H_i_s").".xls";
			$this->template->set_layout('report');
			$this->template->build('report/export',$data);
			header("Content-Disposition: attachment; filename=".$filename);
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		}else{
			$this->template->set_layout('criteria');
			$this->template->build('report/index',$data);
		}
	}

}
?>