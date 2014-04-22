<?php
class Users extends  Public_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('user_model','user');
		$this->load->model('profile_model','profile');
	}
	function index()
	{
		$this->template->set_layout('blank');
		$this->template->build('login');
	}
	function login()
	{//$this->db->debug =true;
		if($_POST)
		{ $rtn = login($this->input->post('email'),$this->input->post('password'));
			if($rtn =="normal")
			{
				set_notify('success', 'ยินดีต้อนรับเข้าสู่ระบบ');
				redirect('home');
			}else if($rtn =="wrong"){
				set_notify('error', 'อีเมล์หรือรหัสผ่านผิดพลาด');
				redirect('users/index');
			}else if($rtn =="email"){
				set_notify('error', 'คุณยังไม่ได้ยืนยันการลงทะเบียน');
				redirect('users/index');
			}
		}
	}
	function register()
	{
		$this->template->set_layout('blank');
		$this->template->build('register');
	}
	function logout(){
		logout();
		redirect('home');
	}
	function confirm_email($id,$gen_id)
	{//$this->db->debug=true;
		$id=clean_url($id);
		$data['result'] = $this->user->get_one("id","id = $id and gen_id",$gen_id);
		$this->user->save(array('id'=>$id,'confirm_email'=>'1'));
		$this->template->build('confirm_email',$data);

	}
	function save(){
		if($_POST){
			$_POST['gen_id'] = generate_password(20);
			$_POST['user_id'] = $this->user->save($_POST);
			$_POST['active'] ="1";
			$this->profile->save($_POST);
	  		$subject = "ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง - ยืนยันการลงทะเบียน";
		    $message='<div><img src="'.base_url().'media/img/name.png" width="500px" height="127px"></di>';
		    $message.='<hr>';
			$message.='<p>เรียนคุณ'.$_POST['firstname'].' '.$_POST['lastname'].', </p>';
			$message.='<p>ขอบคุณสำหรับการลงทะเบียนค่ะ  </p>';
			$message.='<p>กรุณาคลิกลิงค์ด้านล่างเพื่อยืนยันการลงทะเบียน แล้วบัญชีผู้ใช้ของคุณจะสามารถใช้งานได้ค่ะ</p>';
			$message.='<a href="'.base_url().'users/confirm_email/'.$_POST['user_id'].'/'.$_POST['gen_id'].'">'.base_url().'users/confirm_email/'.$_POST['user_id'].'/'.$_POST['gen_id'].'</a>';
			phpmail($subject,$_POST['email'],$message);
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('users/register');
	}
    function check_captcha()
    {
        if($this->session->userdata('captcha')==$_GET['captcha'])
        {
            echo "true";
        }
        else
        {
            echo "false";
        }
    }
	function profile($id)
	{
		$data['user'] = $this->user->get_row("f_users.id",$id);
		$data['profile'] = "บันทึก";
		$this->template->build('profile',$data);

	}
	function forgetPassword(){
		$this->template->build('forgetpassword');
	}
	function sendPassword()
	{
		 if($_POST)
		 {
		 	$rs = $this->user->get_row("email",$_POST['email']);
		 	$subject = "ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง - ลืมรหัสผ่าน";
		 	$message='<div><img src="'.base_url().'media/img/name.png" width="500px" height="127px"></di>';
			$message.='<p>เรียนคุณ'.$rs['firstname'].' '.$rs['lastname'].', </p>';
			$message.='<p>รหัสผ่านของคุณ คือ '.$rs['password'].' </p>';
		 	phpmail($subject,$_POST['email'],$message);
			set_notify('success','ดำเนินการเรียบร้อย');
		 }
		redirect('users/forgetPassword');
	}
	function checkEmail()
	{

	}
	function user_list()
	{	$wh="";
		if(!empty($_GET['area'])){
			$wh= " and f_users.province_id IN(select province_id from f_area_detail where area_id=2 and area_no=".$_GET['area'].")";
		}
		$data['result'] = $this->user->sort('id')->order('desc')->where("permission_id=2 ".$wh)->get();
		$data['pagination'] = $this->user->pagination();
		$this->template->set_layout('_document');
		$this->template->build('user_list',$data);
	}
}

?>