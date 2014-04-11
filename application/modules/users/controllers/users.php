<?php
class Users extends  Public_Controller{
	function __construct(){
		parent::__construct();
	}
	function index()
	{
		$this->template->set_layout('blank');
		$this->template->build('login');
	}
	function login()
	{
		if($_POST)
		{
			if(login($this->input->post('username'),$this->input->post('password')))
			{
				set_notify('success', 'ยินดีต้อนรับเข้าสู่ระบบ');
					redirect('home');
			}else{
				set_notify('error', 'อีเมล์หรือรหัสผ่านผิดพลาด');
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
	function save(){
		if($_POST){
			set_notify('success',SAVE_DATA_COMPLETE);
		}
		redirect('users/register');
	}
}

?>