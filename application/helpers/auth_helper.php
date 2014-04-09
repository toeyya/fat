<?php

function login($username=FALSE,$password=FALSE)
{
	$CI =& get_instance();
	$session_id = session_id();
	$sql="SELECT * FROM f_users  WHERE email= ?  AND password= ? and active='1' ";
	$rs = $CI->db->GetRow($sql,array($username,$password));
	if($rs)
	{
		$CI->session->set_userdata('id',$rs['id']);
		$CI->session->set_userdata('user_type',$rs['user_type']);

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

	save_log("logout");
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