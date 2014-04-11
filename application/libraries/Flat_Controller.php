<?php
class Flat_Controller extends Controller
{
	function __construct()
	{
		parent::__construct();
		if(!is_login()){
			//logout();
			set_notify('error','กรุณาเข้าสู่ระบบ');
			redirect('home');
		}
		//set theme
		$this->template->set_theme('e-flat');
		//set layout
		$this->template->set_layout('layout');
		//$this->template->set_layout('index_bac');
		//set title
		$this->template->title('องค์กรไร้พุง');
		//Set js
		$this->template->append_metadata(js_notify());
	}
	/*function captcha()
	{
		$this->load->library('session');
		$this->load->library('captcha');
		$captcha = new Captcha();
		$captcha->size = 4;
		$captcha->chars = '0123456789';
		$captcha->session = "captcha";
		$captcha->display();
	}*/
}
?>