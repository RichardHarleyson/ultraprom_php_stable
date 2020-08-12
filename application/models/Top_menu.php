<?php
namespace application\models;

use application\core\Model;

class Top_menu extends Model{

	public function getBrands(){
		$result = $this->db->row('SELECT * FROM up_manufacturer WHERE m_image != "0" ORDER BY m_name ASC');
		return $result;
	}


}


 ?>
