<?php

function login($username=FALSE,$password=FALSE)
{
	$CI =& get_instance();
	$CI->db->debug= true;
	$session_id = session_id();
	$sql="SELECT user_id,user_type,agency_name,firstname,lastname FROM f_users LEFT JOIN f_profiles ON f_users.id = f_profiles.user_id WHERE email= ?  AND password= ? and active='1' ";
	$rs = $CI->db->GetRow($sql,array($username,$password));
	if($rs)
	{
		$CI->session->set_userdata('id',$rs['user_id']);
		$CI->session->set_userdata('user_type',$rs['user_type']);
		if($CI->session->userdata('user_type')!= 7 || $CI->session->userdata('user_type')!= 8){
			$CI->session->set_userdata('name',$rs['agency_name']);
		}else{
			$fullname = $rs['firstname']." ".$rs['lastname'];
			$CI->session->userdata('name',$fullname);
		}

		//save_log("login");
		return true;
	}
	else
	{
		return false;
	}

}

function is_login()
{
	$CI =& get_instance();
	$sql="SELECT * FROM f_users  WHERE active='1' and uid = ? ";
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
	return ThaiToUtf8($name);
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
	$CI->load->model('users/user_level_model','level');
	$CI->load->model('permissions/permission_model','permission');
	$level_id = $CI->level->get_one('lid','level_code',$CI->session->userdata('R36_LEVEL'));
	$perm = $CI->permission->where("level_id = ".$level_id." and module = '".$module."'")->get();
	if(!empty($perm)){
		if($perm[0][$action]){
			return TRUE;
		}else{
			return FALSE;
		}
	}else{
		return FALSE;
	}

}



?>