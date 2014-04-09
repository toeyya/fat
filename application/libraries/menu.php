<?php
class Menu{
  static public function menu(){

		$result = get_instance()->db->getarray($sql, array($parent_id, $user_type_id));
  }
}
?>