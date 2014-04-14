<?php
class Auth extends Public_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model','user');
	}

	public function index()
	{
		if(is_login()){
			redirect('users/admin/users');
		}
		$this->template->set_theme('admin');
		$this->template->set_layout('blank');
		$this->template->build('admin/auth/login');
	}

	public function login()
	{
		if($_POST)
		{ $rtn = login($this->input->post('email'),$this->input->post('password'));
			if($rtn =="normal")
			{
				set_notify('success', 'ยินดีต้อนรับเข้าสู่ระบบ');
				redirect('users/admin/users');
			}else if($rtn =="wrong"){
				set_notify('error', 'อีเมล์หรือรหัสผ่านผิดพลาด');
				redirect('users/admin/auth');
			}else if($rtn =="email"){
				set_notify('error', 'คุณยังไม่ได้ยืนยันการลงทะเบียน');
				redirect('users/admin/auth');
			}
		}
	}
	public function logout()
	{
		logout();
		redirect('users/admin/auth');
	}

}

?>
