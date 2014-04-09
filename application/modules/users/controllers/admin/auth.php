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
		{//$this->db->debug=true;
			if(login($this->input->post('username'),$this->input->post('password')))
			{
				set_notify('success', 'ยินดีต้อนรับเข้าสู่ระบบ');
					redirect('users/admin/users');
			}
			else
			{
				set_notify('error', 'คุณไม่มีสิทธิ์เข้าใช้ในส่วนนี้ หรือ  ผู้ใช้มีการใช้งานอยู่ในขณะนี้ !!!');
				redirect('users/admin/auth');
			}
		}else{
			set_notify('error', 'อีเมล์หรือรหัสผ่านผิดพลาด');
			redirect('users/admin/auth');
		}

	}

	public function logout()
	{
		logout();
		redirect('users/admin/auth');
	}

}

?>
