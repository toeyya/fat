<?php
class Report extends  Flat_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('f_behavior/f_behavior_detail_model','detail');
		$this->load->model('f_weight/f_weight_model','weight');
		$this->load->model('f_weight/f_weight_detail_model','w_detail');
		$this->load->model('users/user_model','user');
		$this->load->model('setting/province_model','province');
		$this->load->model('setting/amphur_model','amphur');
		$this->load->model('setting/district_model','district');
		$this->load->model('setting/area_detail_model','area_detail');
	}
	public $bmi_mean = array('ผอม'=>'yellow','ปกติ'=>'green','ท้วม'=>'orange','อ้วน'=>'red','อ้วนมาก'=>'grey');
	public $bmi_mean_export = array('ผอม'=>'background-color:#F8EA82;color:#626262;'
								   ,'ปกติ'=>'background-color:#BDFBC5;color:#626262;'
								   ,'ท้วม'=>'background-color:#FBBE99;color:#626262;'
								   ,'อ้วน'=>'background-color:#FFA29B;color:#626262;'
								   ,'อ้วนมาก'=>'background-color:#BCBCBC;color:#626262;');
	public $fat_mean = array('ปกติ'=>'green','อ้วนลงพุง'=>'red');
	public $fat_mean_export = array('ปกติ'=>'background-color:#BDFBC5;color:#626262;','อ้วนลงพุง'=>'background-color:#FFA29B;color:#626262;');
	function index($report,$print=FALSE)
	{//$this->db->debug=true;
		$data['fat_mean'] = $this->fat_mean;
		$data['fat_mean_export'] = $this->fat_mean_export;
		$data['bmi_mean'] = $this->bmi_mean;
		$data['bmi_mean_export'] = $this->bmi_mean_export;
		$year = date('Y');$yy = $year-1;$yy_end = $year;
		$data['yearth']= $year+543;
		/*if(!empty($_GET['year'])){
			$yy = $_GET['year']-1;
			$yy_end = $_GET['year'];
			$data['yearth'] = $_GET['year']+543;
		}
		$table = ($report=="behavior")? "behavior": "weight";
		$wh =" and date(f_".$table."_detail.created) between '$yy-10-01' and '$yy_end-09-30'";
		*/
		$wh = (empty($_GET['year'])) ?  " and year=".$data['yearth']: " and year =".$_GET['year'];
		$user_id = (!empty($_GET['user_id'])) ? $_GET['user_id'] :$this->session->userdata('id');
		$wh.=" and user_id=".$user_id;
		$data['user_name'] = (!empty($user_id)) ? $this->user->get_one("agency_name","f_users.id",$user_id):"ทุกองค์กร";
		$data['user'] = $this->user->get_row($user_id);
		$data['gender']  = array('1'=>'ชาย','2'=>'หญิง');
		$data['province'] = $this->province->get_one("province_name","id",$data['user']['province_id']);
		$data['amphur'] = $this->amphur->get_one("amphur_name","id",$data['user']['amphur_id']);
		$data['district'] = $this->district->get_one('district_name','id',$data['user']['district_id']);
		$data['print'] = $print;
		$data['hpc'] = $this->area_detail->get_one('area_no','area_id = 2 and province_id',$data['user']['province_id']);
		switch($report)
		{
			case "behavior":
				$this->behavior($data,$wh);
				break;
			case "person":
				$this->person($data,$wh);
				break;
			case "province":
				$this->province($data,$wh);
				break;
			case "area":
				$this->area($data,$wh);
				break;
			case "overview":
				$this->overview($data,$wh);
				break;
			case "waist":
				$this->waist($data,$wh);
				break;
			case "height":
				$this->height($data, $wh);
				break;
			case "bmi":
				$this->bmi($data, $wh);
				break;
		}

	}
	function behavior($data,$wh=FALSE)
	{
		//$this->db->debug = true;
		if(!empty($data))
		{
			$data['total1'] = $this->db->GetOne("select count(f_behavior_detail.id)as total from f_behavior left join f_behavior_detail on f_behavior.id = behavior_id
											    where time=1 $wh");
			$data['total2'] = $this->db->GetOne("select count(f_behavior_detail.id)as total from f_behavior left join f_behavior_detail on f_behavior.id = behavior_id
											    where time=2 $wh");
			$data['title'] = title();
			$data['titleName'] = "รายงานผลการประเมินพฤติกรรม";
			for($i=1;$i<=20;$i++){
				$sql="select score_$i,count(score_$i)as cnt from f_behavior
					  left join f_behavior_detail on f_behavior.id = behavior_id
					  where score_$i is not null and time=1 group by score_$i";
				$data['score1'][$i] = $this->db->GetArray($sql);

				$sql="select score_$i,count(score_$i)as cnt from f_behavior
					  left join f_behavior_detail on f_behavior.id = behavior_id
					  where score_$i is not null and time=2 group by score_$i";
				$data['score2'][$i] = $this->db->GetArray($sql);
			}
		}else{
			$data=array();
		}
		if($data['print']=="preview"){
			$this->template->set_layout('report');
			$this->template->build('behavior/report',$data);
		}else if($data['print']=="export"){
			$filename= "ประเมินพฤติกรรม_".date("Y-m-d_H_i_s").".xls";
			$this->template->set_layout('report');
			$this->template->build('behavior/export',$data);
			header("Content-Disposition: attachment; filename=".$filename);
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		}else{
			$this->template->set_layout('e-belly');
			$this->template->build('behavior/index',$data);
		}

	}
	function person($data,$wh=FALSE)
	{	//$this->db->debug= true;
		$wh .=(!empty($_GET['fullname'])) ? " and fullname = '".$_GET['fullname']."'":'';
		$data['color'] = array('ปกติ'=>'green','อ้วนลงพุง'=>'red',''=>'');
		$select ="fullname,age,gender,ifnull(waistline,0) as waistline,fat,ifnull(weight,0) as weight,ifnull(height,0) as height,ifnull(bmi_value,0.00) as bmi_value";
		$data['res1'] = $this->weight->select($select)
							         ->join("LEFT JOIN f_weight_detail ON f_weight.id = weight_id")->where("time=1 $wh")->sort("f_weight.id")->order("asc")->get();
		$data['res2'] = $this->weight->join("LEFT JOIN f_weight_detail ON f_weight.id = weight_id")->where("time=2 $wh")->sort("f_weight.id")->order("asc")->get();
		if($data['print']=="preview"){
			$this->template->set_layout('report');
			$this->template->build('weight/person/report',$data);
		}else if($data['print']=="export"){
			$filename= "รายงานแบบฟอร์มการบันทึก รอบเอง น้ำหนัก ส่วนสูง ของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง_".date("Y-m-d_H_i_s").".xls";
			$this->template->set_layout('report');
			$this->template->build('weight/person/export',$data);
			header("Content-Disposition: attachment; filename=".$filename);
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		}else{
			$this->template->build('weight/person/index',$data);
		}

	}
	function province($data,$wh=FALSE)
	{
		$wh.=(empty($_GET['province_id'])) ? '':" and province_id = ".$_GET['province_id'];
		//$this->db->debug =true;
		// ทั้งหมด
		$sql="select user_id,count(user_id) as total ,f_agency_type.name as agency_type_name,agency_name
			  ,people_fiveteen_male1+people_fiveteen_female1 as user_total
			 from f_weight
			 left join f_weight_detail ON f_weight.id = f_weight_detail.weight_id
			 left join f_users ON f_weight.user_id = f_users.id
			 left join f_agency_type ON f_users.agency_type = f_agency_type.id
			 where user_type='1' and time=1 and (waistline<>'' or waistline <> null) $wh
			 group by user_id order by user_id";
		echo $sql;
		$data['result'] = $this->db->GetArray($sql);
		$data['pagination'] = $this->weight->pagination();
	   // ทั้งหมด
		$sql ="select user_id,count(user_id) as total ,f_agency_type.name as agency_type_name,agency_name
			  ,people_fiveteen_male2+people_fiveteen_female2 as user_total
			 from f_weight
			 left join f_weight_detail ON f_weight.id = f_weight_detail.weight_id
			 left join f_users ON f_weight.user_id = f_users.id
			 left join f_agency_type ON f_users.agency_type = f_agency_type.id
			 where user_type='1' and time=2 and (waistline<>'' or waistline <> null) $wh
			 group by user_id order by user_id";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['user_total'][$item['user_id']][2] = $item['user_total'];
			$data['total'][$item['user_id']][2] = $item['total'];
		}
		// อ้วน ครั้งที่ 1
		$sql="select user_id,fat,count(fat)as cnt from f_weight
			  left join f_weight_detail ON f_weight.id = weight_id
			  left join f_users on f_weight.user_id = f_users.id
			  left join f_agency_type ON f_agency_type.id = f_users.agency_type
			  where (agency_type <> 7 or agency_type <>8) and time = 1
			  group by fat,user_id order by user_id,time,fat";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['fat'][$item['user_id']][$item['fat']][1] = $item['cnt'];
			$data['fatmean'][$item['user_id']][1] = $item['fat'];
		}
		// รอบเอว
		$sql = "select user_id,ROUND(avg(waistline)) as cnt,time,STDDEV(waistline) as sd FROM f_weight
				left join f_weight_detail on f_weight.id = weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_agency_type ON f_agency_type.id = f_users.agency_type
				where (agency_type <> 7 or agency_type <>8)
				group by user_id,time order by user_id,time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['waistline'][$item['user_id']][$item['time']] = $item['cnt'];
			$data['sd'][$item['user_id']][$item['time']] = $item['sd'];
		}
		// อ้วนครั้งที่ 2
		$sql="select user_id,fat,count(fat) as cnt from f_weight
			  left join f_weight_detail ON f_weight.id = weight_id
			  left join f_users on f_weight.user_id = f_users.id
			  left join f_agency_type ON f_agency_type.id = f_users.agency_type
			  where (agency_type <> 7 or agency_type <>8) and time = 2
			  group by fat,user_id order by user_id,time,fat";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['fat'][$item['user_id']][$item['fat']][2] = $item['cnt'];
			$data['fatmean'][$item['user_id']][2] = $item['fat'];
		}
		// น้ำหนัก ครั้งที่ 1
		$sql = "select user_id,sum(weight) as sum_weight,avg(weight) as avg_weight from f_weight
				left join f_weight_detail ON f_weight.id = weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_agency_type ON f_agency_type.id = f_users.agency_type
				where (agency_type <> 7 or agency_type <>8) and time = 1
				group by user_id
				order by user_id,time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			//$data['bmi'][$item['user_id']][$item['bmi_mean']][1] = $item['cnt'];
			$data['weight'][$item['user_id']]['sum'][1] =$item['sum_weight'];
			$data['weight'][$item['user_id']]['avg'][1] =$item['avg_weight'];
		}
		// น้ำหนัก ครั้งที่ 2
		$sql = "select user_id,sum(weight) as sum_weight,avg(weight) as avg_weight from f_weight
				left join f_weight_detail ON f_weight.id = weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_agency_type ON f_agency_type.id = f_users.agency_type
				where (agency_type <> 7 or agency_type <>8) and time = 2
				group by user_id
				order by user_id,time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			//$data['bmi'][$item['user_id']][$item['bmi_mean']][2] = $item['cnt'];
			$data['weight'][$item['user_id']]['sum'][2] =$item['sum_weight'];
			$data['weight'][$item['user_id']]['avg'][2] =$item['avg_weight'];
		}
		if($data['print']=="preview"){
			$this->template->set_layout('report');
			$this->template->build('weight/province/report',$data);
		}else if($data['print']=="export"){
			$filename= "รายงานแบบฟอร์มการบันทึก รอบเอง น้ำหนัก ส่วนสูง [รายองค์กร]_".date("Y-m-d_H_i_s").".xls";
			$this->template->set_layout('report');
			$this->template->build('weight/province/export',$data);
			header("Content-Disposition: attachment; filename=".$filename);
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		}else{
			$this->template->build('weight/province/index',$data);
		}
	}
	function area($data,$wh=FALSE)
	{

	    $wh =(!empty($_GET['year'])) ? "and year =".$_GET['year']: " and year=".$data['yearth'];

		$sql = "select count(agency_type) as cnt,abbr,province_id,province_name
			 from f_weight
			 left join f_weight_detail ON f_weight.id = f_weight_detail.weight_id
			 left join f_users ON f_weight.user_id = f_users.id
			 left join f_agency_type ON f_users.agency_type = f_agency_type.id
			 left join f_province ON f_province.id = f_users.province_id
			 where (agency_type <> 7 or agency_type <>8) $wh
			 group by province_id,agency_type order by province_name";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['agency'][$item['province_id']][$item['abbr']] = $item['cnt'];
		}
		$data['result'] = $result;
		// ทั้งหมดครั้งที่ 1 และ ครั้งที่ 2
		/*$sql = "select province_id,sum(people_fiveteen_female1+people_fiveteen_male1) as total1
					  ,sum(people_fiveteen_female2+people_fiveteen_male2) as total2
		 		from f_users group by province_id ";*/
		$sql ="select province_id,sum(f_people.people_fiveteen_male1+f_people.people_fiveteen_female1) as total1,
				sum(f_people.people_fiveteen_male2+f_people.people_fiveteen_female2) as total2
				from f_people left join f_users ON f_users.id = f_people.user_id
				group by province_id";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['total'][$item['province_id']][1] = $item['total1'];
			$data['total'][$item['province_id']][2] = $item['total2'];

		}
		// จำนวนที่วัดเอว ครั้งที่ 1 และ ครั้งที่ 2
		$sql = "select count(user_id) as cnt,province_id,time
				from f_weight
				left join f_weight_detail on f_weight.id = weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_agency_type ON f_agency_type.id = f_users.agency_type
				where (agency_type <> 7 or agency_type <>8) $wh
				group by province_id,time order by province_id,time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['user_total'][$item['province_id']][$item['time']] = $item['cnt'];
		}
		// วัดเอว ครั้งที่ 1
		$sql = "select count(user_id) as cnt,province_id
				from f_weight
				left join f_weight_detail ON f_weight.id = f_weight_detail.weight_id
				left join f_users ON f_weight.user_id = f_users.id
				left join f_agency_type ON f_users.agency_type = f_agency_type.id
				left join f_province ON f_province.id = f_users.province_id
				where (agency_type <> 7 or agency_type <>8) and time = 1 $wh
				group by province_id,agency_type order by province_name";
		$result = $this->db->Execute($sql);
		foreach($result as $item){
			$data['waistline'][$item['province_id']][1] = $item['cnt'];
		}
		// วัดเอว ครั้งที่ 2
		$sql = "select count(user_id) as cnt,province_id
				from f_weight
				left join f_weight_detail ON f_weight.id = f_weight_detail.weight_id
				left join f_users ON f_weight.user_id = f_users.id
				left join f_agency_type ON f_users.agency_type = f_agency_type.id
				left join f_province ON f_province.id = f_users.province_id
				where (agency_type <> 7 or agency_type <>8) and time = 2 $wh
				group by province_id,agency_type order by province_name";
		$result = $this->db->Execute($sql);
		foreach($result as $item){
			$data['waistline'][$item['province_id']][2] = $item['cnt'];
		}

		// อ้วน ครั้งที่ 1
		$sql = "select count(fat) as cnt,province_id,fat
				from f_weight
				left join f_weight_detail ON f_weight.id = f_weight_detail.weight_id
				left join f_users ON f_weight.user_id = f_users.id
				left join f_agency_type ON f_users.agency_type = f_agency_type.id
				left join f_province ON f_province.id = f_users.province_id
				where (agency_type <> 7 or agency_type <>8) and time=1 $wh
				group by province_id,fat order by province_name";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['fat'][$item['province_id']][$item['fat']][1] = $item['cnt'];
		}
	   // รอบเอว ครั้งที่ 1 และ 2
	    $sql = "select province_id,ROUND(avg(waistline)) as cnt,time,STDDEV(waistline) as sd FROM f_weight
				left join f_weight_detail on f_weight.id = weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_agency_type ON f_agency_type.id = f_users.agency_type
				where (agency_type <> 7 or agency_type <>8) $wh
				group by  province_id,time order by  province_id,time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['waistline'][$item['province_id']][$item['time']] = $item['cnt'];
			$data['sd'][$item['province_id']][$item['time']]         = $item['sd'];
		}

		// อ้วน ครั้งที่ 2
		$sql = "select count(fat) as cnt,province_id,fat
				from f_weight
				left join f_weight_detail ON f_weight.id = f_weight_detail.weight_id
				left join f_users ON f_weight.user_id = f_users.id
				left join f_agency_type ON f_users.agency_type = f_agency_type.id
				left join f_province ON f_province.id = f_users.province_id
				where (agency_type <> 7 or agency_type <>8) and time = 2 $wh
				group by province_id,fat order by province_name";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['fat'][$item['province_id']][$item['fat']][2] = $item['cnt'];
		}
		// ค่าเฉลี่ยนน้ำหนัก ครั้งที่ 1
		$sql = "select province_id,sum(weight) as sum_weight,avg(weight) as avg_weight,time from f_weight
				left join f_weight_detail ON f_weight.id = weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_agency_type ON f_agency_type.id = f_users.agency_type
				where (agency_type <> 7 or agency_type <>8) $wh
				group by province_id,time order by province_id";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['weight'][$item['province_id']]['sum'][$item['time']] = $item['sum_weight'];
			$data['weight'][$item['province_id']]['avg'][$item['time']] = $item['avg_weight'];
		}
		if($data['print']=="preview"){
			$this->template->set_layout('report');
			$this->template->build('weight/area/report',$data);
		}else if($data['print']=="export"){
			$filename= "รายงานแบบฟอร์มการบันทึก รอบเอง น้ำหนัก ส่วนสูง _รายจังหวัด_".date("Y-m-d_H_i_s").".xls";
			$this->template->set_layout('report');
			$this->template->build('weight/area/export',$data);
			header("Content-Disposition: attachment; filename=".$filename);
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		}else{
			$this->template->build('weight/area/index',$data);
		}
	}
	function overview($data,$wh=FALSE)
	{
		$wh =(!empty($_GET['year'])) ? "and year =".$_GET['year']: " and year=".$data['yearth'];
		$sql="select area_no
			 ,sum(f_people.people_fiveteen_male1+f_people.people_fiveteen_female1) as total1
			 ,sum(f_people.people_fiveteen_male2+f_people.people_fiveteen_female2) as total2
			  from f_people
			  left join f_users ON f_users.id = f_people.user_id
		  	  left join f_area_detail  ON f_users.province_id = f_area_detail.province_id
      		  where area_id=2
			  group by area_no";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['total'][$item['area_no']][1] = $item['total1'];
			$data['total'][$item['area_no']][2] = $item['total2'];

		}
		$data['result'] = $result;
		$sql = "select count(agency_type) as cnt,abbr,area_no,f_users.province_id
			 from f_weight
			 left join f_weight_detail ON f_weight.id = f_weight_detail.weight_id
			 left join f_users ON f_weight.user_id = f_users.id
			 left join f_agency_type ON f_users.agency_type = f_agency_type.id
			 left join f_area_detail ON f_area_detail.province_id = f_users.province_id
			 where (agency_type <> 7 or agency_type <>8)  and area_id =2 $wh
			 group by area_no,agency_type order by area_no";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['area'][$item['area_no']][$item['abbr']] = $item['cnt'];
		}

		// จำนวนคน
		$sql ="select count(f_weight.user_id) as cnt,area_no,time
			from f_weight
			left join f_weight_detail on f_weight.id = weight_id
			left join f_users on f_weight.user_id = f_users.id
			left join f_area_detail ON f_users.province_id  = f_area_detail.province_id
			where user_type='1'  and area_id = 2 $wh
			group by area_no,time order by area_no,time";
		$result  = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['user_total'][$item['area_no']][$item['time']] = $item['cnt'];
		}

		$sql = "select count(fat) as cnt,area_no,fat,time
			from f_weight
			left join f_weight_detail ON f_weight.id = f_weight_detail.weight_id
			left join f_users ON f_weight.user_id = f_users.id
			left join f_area_detail ON f_users.province_id = f_area_detail.province_id
			where user_type='1' and area_id='2'
			group by area_no,fat,time order by area_no,fat,time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['fat'][$item['area_no']][$item['fat']][$item['time']] = $item['cnt'];
		}
		$sql ="select area_no,avg(waistline) as cnt,time,STDDEV(waistline) as sd FROM f_weight
			left join f_weight_detail on f_weight.id = weight_id
			left join f_users on f_weight.user_id = f_users.id
			left join f_area_detail ON f_users.province_id = f_area_detail.province_id
			where   user_type='1' and area_id='2' $wh
			group by  area_no,time order by  area_no,time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['waistline'][$item['area_no']][$item['time']] = $item['cnt'];
			$data['sd'][$item['area_no']][$item['time']]         = $item['sd'];
		}

		$sql ="select area_no,sum(weight) as sum_weight,avg(weight) as avg_weight,time from f_weight
				left join f_weight_detail ON f_weight.id = weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_area_detail on f_users.province_id = f_area_detail.province_id
				where user_type='1' and area_id=2 $wh
				group by area_no,time order by area_no,time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['weight'][$item['area_no']]['sum'][$item['time']] = $item['sum_weight'];
			$data['weight'][$item['area_no']]['avg'][$item['time']] = $item['avg_weight'];
		}
		if($data['print']=="preview"){
			$this->template->set_layout('report');
			$this->template->build('weight/overview/report',$data);
		}else if($data['print']=="export"){
			$filename= "รายงานแบบฟอร์มการบันทึก รอบเอง น้ำหนัก ส่วนสูง _รายเขต_".date("Y-m-d_H_i_s").".xls";
			$this->template->set_layout('report');
			$this->template->build('weight/overview/export',$data);
			header("Content-Disposition: attachment; filename=".$filename);
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		}else{
			$this->template->build('weight/overview/index',$data);
		}

	}
	function bmi($data,$wh)
	{
		$user_id = (!empty($_GET['user_id'])) ? $_GET['user_id'] :$this->session->userdata('id');
		$time="";
		$data['time'] = "1";
		if(!empty($_GET['time'])){
			$time ="and time= ".$_GET['time'];
			$data['time'] = $_GET['time'];
		}
		$sql= " select gender,time,count(gender) as cnt from f_weight
				left join f_weight_detail on f_weight.id = f_weight_detail.weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_agency_type ON f_agency_type.id = f_users.agency_type
				where (agency_type <> 7 or agency_type <>8)
				and user_id= $user_id
				group by gender ,time";

		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['total'][$item['gender']][$item['time']] = $item['cnt'];
		}
		$sql = "select gender,bmi_mean,count(bmi_mean) as cnt from f_weight
				left join f_weight_detail on f_weight.id = f_weight_detail.weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_agency_type ON f_agency_type.id = f_users.agency_type
				where (agency_type <> 7 or agency_type <>8)
				and user_id= $user_id $time
				group by bmi_mean,gender";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['waist'][$item['gender']][$item['bmi_mean']] = $item['cnt'];
		}
		$data['user_total'] = array_sum($data['waist']);
		if($data['print']=="preview"){
			$this->template->set_layout('report');
			$this->template->build('weight/bmi/report',$data);
		}else if($data['print']=="export"){
			$filename= "รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง BMI_".date("Y-m-d_H_i_s").".xls";
			$this->template->set_layout('report');
			$this->template->build('weight/bmi/export',$data);
			header("Content-Disposition: attachment; filename=".$filename);
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		}else{
			$this->template->build('weight/bmi/index',$data);
		}

	}
	function height($data,$wh)
	{
		$user_id = (!empty($_GET['user_id'])) ? $_GET['user_id'] :$this->session->userdata('id');
		$time="";
		$data['time'] = "1";
		if(!empty($_GET['time'])){
			$time ="and time= ".$_GET['time'];
			$data['time'] = $_GET['time'];
		}
		$sql= " select gender,time,count(gender) as cnt from f_weight
				left join f_weight_detail on f_weight.id = f_weight_detail.weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_agency_type ON f_agency_type.id = f_users.agency_type
				where (agency_type <> 7 or agency_type <>8)
				and user_id= $user_id
				group by gender ,time";

		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['total'][$item['gender']][$item['time']] = $item['cnt'];
		}

		$sql = "select gender,height,height/2 as divide,waistline from f_weight
				left join f_weight_detail on f_weight.id = f_weight_detail.weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_agency_type ON f_agency_type.id = f_users.agency_type
				where (agency_type <> 7 or agency_type <>8)
				and user_id= $user_id $time ";
		$result = $this->db->GetArray($sql);
		$i=0;$j=0;$m=0;$k=0;
		foreach($result as $item){
			if($item['waistline'] <= $item['divide']){
				if($item['gender']=="1"){
					$m++;
					$data['normal'][$item['gender']] = $m;
				}else{
					$i++;
					$data['normal'][$item['gender']] = $i;
				}
			}else if($item['waistline'] > $item['divide']){
				if($item['gender']=="1"){
					$k++;
					$data['abnormal'][$item['gender']] = $k;
				}else{
					$j++;
					$data['abnormal'][$item['gender']] = $j;
				}
			}
		}

		if($data['print']=="preview"){
			$this->template->set_layout('report');
			$this->template->build('weight/height/report',$data);
		}else if($data['print']=="export"){
			$filename= "รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง Ht_".date("Y-m-d_H_i_s").".xls";
			$this->template->set_layout('report');
			$this->template->build('weight/height/export',$data);
			header("Content-Disposition: attachment; filename=".$filename);
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		}else{
			$this->template->build('weight/height/index',$data);
		}

	}
	function waist($data,$wh)
	{
		//$this->db->debug = true;
		$user_id = (!empty($_GET['user_id'])) ? $_GET['user_id'] :$this->session->userdata('id');
		$time="";
		$data['time'] = "1";
		if(!empty($_GET['time'])){
			$time ="and time= ".$_GET['time'];
			$data['time'] = $_GET['time'];
		}
		$sql  = "select people_fiveteen_male1 + people_fiveteen_female1 as total from f_people where 1=1 $wh ";
		$data['total'] = $this->db->GetOne($sql);
		$sql = "select count(user_id)as cnt,sum(weight) as sum_weight
					  ,avg(weight) as avg_weight,time,avg(waistline) as avg_waist,sum(waistline) as sum_waist
		        from f_weight
				left join f_weight_detail ON f_weight.id = weight_id
				left join f_users on f_weight.user_id = f_users.id
				left join f_agency_type ON f_agency_type.id = f_users.agency_type
				where (agency_type <> 7 or agency_type <>8) $wh
				group by time";
		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['cnt'][$item['time']] =$item['cnt'];
			$data['sum_weight'][$item['time']] = $item['sum_weight'];
			$data['avg_weight'][$item['time']] = $item['avg_weight'];
			$data['sum_waist'][$item['time']]  = $item['sum_waist'];
			$data['avg_waist'][$item['time']]  = $item['avg_waist'];
		}
 		$sql = "select count(fat) as cnt,fat,gender,time
 				from f_weight left join f_weight_detail ON f_weight.id = f_weight_detail.weight_id
 				left join f_users ON f_weight.user_id = f_users.id
 				left join f_agency_type ON f_users.agency_type = f_agency_type.id
 				left join f_province ON f_province.id = f_users.province_id
 				where (agency_type <> 7 or agency_type <>8) $wh
 				group by fat,gender,time order by fat,gender,time";

		$result = $this->db->GetArray($sql);
		foreach($result as $item){
			$data['fat'][$item['fat']][$item['gender']][$item['time']] = $item['cnt'];
		}
		if($data['print']=="preview"){
			$this->template->set_layout('report');
			$this->template->build('weight/waist/report',$data);
		}else if($data['print']=="export"){
			$filename= "รายงานภาวะโรคอ้วนลงพุงของศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง รอบเอว_".date("Y-m-d_H_i_s").".xls";
			$this->template->set_layout('report');
			$this->template->build('weight/waist/export',$data);
			header("Content-Disposition: attachment; filename=".$filename);
			echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
		}else{
			$this->template->build('weight/waist/index',$data);
		}

	}

}
?>