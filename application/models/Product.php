<?php
namespace application\models;

use application\core\Model;

class Product extends Model{

	public function getProduct($id){
		$params = [
			'eng_name' => $id,
		];
		$result = $this->db->row('SELECT * FROM up_product WHERE eng_name=:eng_name', $params);
		return $result;
	}

	public function get_same_products($type){
		$result = $this->db->row('SELECT * FROM up_product WHERE category_id='.$type.' AND available=1 LIMIT 10');
		return $result;
	}

	public function lcategory_ename($id){
		$result = $this->db->row('SELECT * FROM up_lower_category WHERE id='.$id);
		return $result;
	}

	public function get_manufacturer($id){
		return $this->db->row('SELECT * FROM up_manufacturer WHERE id='.$id);
	}

	public function category_ename($id){
		$result = $this->db->row('SELECT * FROM up_category WHERE id='.$id);
		return $result;
	}

	public function get_reviews($id){
		$result = $this->db->row('SELECT * FROM up_comments WHERE product_id='.$id.' AND status=1');
		return $result;
	}

	public function new_review($review){
		$result = $this->db->insert_query('INSERT INTO up_comments(uname, comment, rating, product_id) VALUES (:uname, :review, :rating, :product_id)', $review);
		return $result;
	}


}


 ?>
