<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP 4.3.2 or newer
 *
 * @package		CodeIgniter
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2008 - 2009, EllisLab, Inc.
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * CodeIgniter Email Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		ExpressionEngine Dev Team
 * @link		http://codeigniter.com/user_guide/helpers/email_helper.html
 */

// ------------------------------------------------------------------------

/**
 * Validate email address
 *
 * @access	public
 * @return	bool
 */
if ( ! function_exists('valid_email'))
{
	function valid_email($address)
	{
		return ( ! preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $address)) ? FALSE : TRUE;
	}
}

// ------------------------------------------------------------------------

/**
 * Send an email
 *
 * @access	public
 * @return	bool
 */
if ( ! function_exists('send_email'))
{

	function send_email($recipient, $subject = 'Test email', $message = 'Hello World',$strHeader='Content-type: text/html; charset=windows-874')
	{


		return mail($recipient, $subject, $message,$strHeader);
	}
}
if(!function_exists('phpmail')){
	function phpmail($subject,$address,$message,$bcc=FALSE){
		require_once("include/PHPMailer_v5.1/class.phpmailer.php");  // ประกาศใช้ class phpmailer กรุณาตรวจสอบ ว่าประกาศถูก path
		//require_once("include/PHPMailer_v5.1/class.smtp.php");  // ประกาศใช้ class phpmailer กรุณาตรวจสอบ ว่าประกาศถูก path
		$mail = new PHPMailer();
		$mail->CharSet = "utf-8";  // ในส่วนนี้ ถ้าระบบเราใช้ tis-620 หรือ windows-874 สามารถแก้ไขเปลี่ยนได้
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;

		$mail->Host       = "mail1.favouritehosting.com";
		$mail->Port       = 25;
		$mail->Username   = "admin@thaigcd.ddc.moph.go.th";
		$mail->Password   = "th@1gcd*";
		$mail->From       = "admin@favouritedesign.com";  //  account e-mail ของเราที่ใช้ในการส่งอีเมล
		$mail->FromName   = "ศูนย์การเรียนรู้องค์กรต้นแบบไร้พุง"; //  ชื่อผู้ส่งที่แสดง เมื่อผู้รับได้รับเมล์ของเรา

		$mail->AddAddress($address);
		if(!empty($bcc)){
			if(is_array($bcc)){
				foreach($bcc as $item){
					$mail->AddAddress($item['username']);
				}
			}
		}

		$mail->IsHTML(true);                  // ถ้า E-mail นี้ มีข้อความในการส่งเป็น tag html ต้องแก้ไข เป็น true
		$mail->Subject     =  $subject;        // หัวข้อที่จะส่ง
		$mail->Body     = $message;                   // ข้อความ ที่จะส่ง
		$mail->SMTPDebug = false;
		//$mail->do_debug = 0;
		$flgSend = $mail->send();

		if (empty($flgSend))
		{
		  print ('CANNOT SEND EMAIL');
		}else{
		  return true;
		}

	}
}


/* End of file email_helper.php */
/* Location: ./system/helpers/email_helper.php */