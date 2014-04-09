<?php
class Public_Controller extends Controller
{

	function __construct()
	{
		parent::__construct();

		//set theme
		$this->template->set_theme('e-belly');
		//set layout
		$this->template->set_layout('layout');
		//$this->template->set_layout('index_bac');
		//set title
		$this->template->title('คนไทยไร้พุง ศูนย์การเรียนรู้องค์กรต้นแบบ');
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