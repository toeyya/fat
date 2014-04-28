<?php

function login($username=FALSE,$password=FALSE)
{
	$CI =& get_instance();
	$sql="SELECT f_users.id as user_id,permission_id,agency_name,firstname,lastname,confirm_email,response_man FROM f_users
		  LEFT JOIN f_profiles ON f_users.id = f_profiles.user_id WHERE email= ?  AND password= ? and active='1'";
	$rs = $CI->db->GetRow($sql,array($username,$password));
	if($rs)
	{
		$CI->session->set_userdata('id',$rs['user_id']);
		$CI->session->set_userdata('permission_id',$rs['permission_id']);
		if($rs['permission_id']=="2"){
			$CI->session->set_userdata('name',$rs['agency_name']);
		}else{
			$CI->session->set_userdata('name',$rs['response_man']);
		}
		$confirm_email = $CI->db->GetOne("select confirm_email from f_users where id = ? ",$rs['user_id']);
		if($confirm_email){
			return "normal";

		}else{
			return "email";
		}
	}
	else
	{
		return "wrong";
	}
}
function is_login()
{
	$CI =& get_instance();
	$sql="SELECT * FROM f_users  WHERE  id = ? ";
	$id = $CI->db->GetOne($sql,$CI->session->userdata('id'));
	return ($id) ? true : false;
}
function is_owner($id)
{
    $CI =& get_instance();
    if($id == $CI->session->userdata('id') && $CI->session->userdata('id') != 0)
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}
function login_data($field)
{
	$CI =& get_instance();
	$sql = 'select '.$field.' from f_users  where id  = ?';

	$name = $CI->db->GetOne($sql,$CI->session->userdata('id'));
	return $name;
	//return ThaiToUtf8($name);
}

function logout()
{
	$CI =& get_instance();
	//$CI->load->model('users/user_model','user');
	//$CI->user->get_row("uid",$CI->session->userdata('R36_UID'));

		//$rs['session_id'] ="";
		//$rs['uid'] = $CI->session->userdata('R36_UID');
		//$CI->user->primary_key("uid");
		//$CI->user->save($rs);

	//save_log("logout");
	$CI->session->sess_destroy();

}
function permission($module, $action)
{
	$CI =& get_instance();
	$CI->load->model('permission/permission_detail_model','detail');
	$CI->load->model('permission/permission_model','permission');
	$permission_id = $CI->session->userdata('permission_id');
	$perm = $CI->detail->get_row("permission_id = ".$permission_id." and module ",$module);
	if(!empty($perm)){
		if($perm[$action]){
			return TRUE;
		}else{
			return FALSE;
		}
	}else{
		return FALSE;
	}
}


?>