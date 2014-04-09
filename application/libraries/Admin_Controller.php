<?php
class Admin_Controller extends Controller
{

	function __construct()
	{
		parent::__construct();
		/*if(!is_login('admin')){
			logout();
			set_notify('error','กรุณาเข้าสู่ระบบ');
			redirect('users/admin/auth');
		}*/
		//$this->template->set_theme('default');
		//$this->template->set_layout('index_bac');

		// set themes
		$this->template->set_theme('admin');

		// set layout
		$this->template->set_layout('layout');

		// set title
		$this->template->title('ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง :: ผู้ดูแลระบบ');

		// Set js
		$this->template->append_metadata(js_notify());

	}
}
?>