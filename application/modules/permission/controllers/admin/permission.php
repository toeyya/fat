<?php
class Permission extends Admin_Controller
{

	public $module = array(
		'permissions' => array('label' => 'สิทธิ์การใช้งาน', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'users' => array('label' => 'สมาชิก', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'settings' => array('label' => 'ตั้งค่าระบบ', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'project' => array('label' => 'ข้อมูลโครงการ', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'place' => array('label' => 'ทำเนียบ', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'criteria' => array('label' => 'เกณฑ์ประเมิน', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'hilight' => array('label' => 'ไฮไลท์', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'download' => array('label' => 'สื่อสิ่งพิมพ์', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'informations' => array('label' => 'ข่าวประชาสัมพันธ์', 'permission' =>array('act_read','act_create','act_update','act_delete')),
		'eatting' => array('label' => 'การวางแผนการกิน', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'weight' => array('label' => 'ลดน้ำหนัก ลดรอบเอว', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'exercise' => array('label' => 'การออกกำลังกาย', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'album' => array('label' => 'ภาพกิจกรรม', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'km' => array('label' => 'KM', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'M&E' => array('label' => 'M&E', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'webboard'=>array('label' => 'เว็บบอร์ด', 'permission' => array('act_read','act_create','act_update','act_delete')),
		'contact'=>array('label' => 'ติดด่อเรา', 'permission' => array('act_read','act_create','act_update','act_delete')),

	);

	public $crud = array(
		'act_read' => 'ดู',
		'act_create' => 'เพิ่ม',
		'act_update' => 'แก้ไข',
		'act_delete' => 'ลบ',
		'act_download' => 'ดาวน์โหลด'
	);

	public function __construct()
	{
		parent::__construct();
		//$this->load->model('users/user_model','user');
		$this->load->model('permission_model','permission');
		$this->load->model('permission_detail_model','detail');
	}

	public function index()
	{
		$data['result'] = $this->permission->sort("")->order("id asc")->get();
		$data['pagination'] = $this->permission->pagination();
		/*$chk_delete = $this->user->select("permission_id")->groupby("userposition")->sort("")->order("userposition asc")->get();
		foreach($chk_delete as $key=>$item){
			$permission[]=$item['userposition'];
		}
		$data['chk_delete'] = $permission;*/
		$this->template->build('admin/index',$data);
	}


	public function form($id=FALSE)
	{//$this->db->debug= true;
		$data['permission'] = $this->permission->get_row($id);
		$data['rs_perm'] = $this->permission_row($id);
		$data['module'] = $this->module;
		$data['crud'] = $this->crud;
		$this->template->build('admin/form',$data);
	}

	public function permission_row($permission_id)
	{
		if($permission_id)
		{
			//$perms = new Permission();
			$perms = $this->detail->where("permission_id = ".$permission_id)->get();
			foreach($perms as $item)
			{
				$perm[$item['module']] = array(
					'act_read' => $item['act_read'],
					'act_create' => $item['act_create'],
					'act_update' => $item['act_update'],
					'act_delete' => $item['act_delete'],
					'act_download' => $item['act_download']
				);
			}
			//var_dump($perm);
			return @$perm;
		}
		else return NULL;
	}

	public function save($id=FALSE)
	{
	  //$this->db->debug=true;
		if($_POST){

			$id=$this->permission->save($_POST);
			$this->detail->delete("permission_id",$id);
			if(isset($_POST['checkbox'])){
				foreach($_POST['checkbox'] as $module => $item)
				{
					$data['permission_id'] = $id;
					$data['module'] = $module;
					foreach($item as $perm => $val) $data[$perm] =  $val;
						$this->detail->save($data);
						$data = array();
				}
			}
			set_notify('success', SAVE_DATA_COMPLETE);
		}
		redirect("permission/admin/permission/index");
	}

	public function delete($id){
		if($id){
			$this->detail->delete("permission_id",$id);
			$this->permission->delete("id",$id);
			set_notify('success', DELETE_DATA_COMPLETE);
		}
		redirect($_SERVER['HTTP_REFERER']);
	}


	public function chkPermission(){
		//$this->db->debug=true;
		if(!empty($_GET['lid'])){
			$rs = $this->db->GetOne("select id from f_permission where name = ?  and id <> ? ",array($_GET['name'],$_GET['permission_id']));
		}else{
			$rs = $this->level->get_one("id","name",$_GET['name']);

		}
		echo (!empty($rs)) ? "false" :"true";
		// valid = true, invalid = false
	}

}
?>