<?php
class Permission_model extends MY_Model
{
	public $table = "f_permission";
	//public $select ="f_permission.id,f_permission.name,act_read,act_create,act_update,act_delete,act_download";
	//public $join  = "LEFT JOIN f_permission_detail ON f_permission.id = f_permission_detail.permission_id";
	public function __construct()
	{
		parent::__construct();
	}

}
?>