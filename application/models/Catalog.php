<?php
namespace application\models;

use application\core\Model;

class Catalog extends Model{

	public function getProducts($category){
		$result = $this->db->row('SELECT * FROM up_product WHERE category_id='.$category.' AND available=1 ORDER BY onsale=1 DESC');
		return $result;
	}

	public function getCategory(){
		$result = $this->db->row('SELECT * FROM up_lower_category');
		return $result;
	}

	public function getProducts_sorted($category, $type){
		// $category_id = $this->db->row('SELECT * from up_category WHERE eng_name='.$category);
		$query_data = ['category_id' => $category];
		if($type == 'sale'){
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id  AND available=1 ORDER BY onsale=1 DESC', $query_data);
		}elseif($type == 'price_desc'){
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id  AND available=1 ORDER BY price_uah DESC', $query_data);
		}elseif ($type == 'price_asc') {
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id  AND available=1 ORDER BY price_uah ASC', $query_data);
		}elseif($type == 'rating_desc'){
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id  AND available=1 ORDER BY rating DESC', $query_data);
		}elseif ($type == 'rating_asc') {
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id  AND available=1 ORDER BY rating ASC', $query_data);
		}elseif($type == 'title_desc'){
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id  AND available=1 ORDER BY title DESC', $query_data);
		}elseif ($type == 'title_asc') {
			$result = $this->db->row('SELECT * FROM up_product WHERE category_id=:category_id  AND available=1 ORDER BY onsale=1 DESC', $query_data);
		}else{
			$result = $this->getProducts($category);
		}
		return $result;
	}

	public function getCategories($category){
		$vars = ['eng_name' => $category];
		$category = $this->db->row('SELECT * FROM up_category WHERE eng_name=:eng_name', $vars);
		return $category;
	}

	public function getLcategory($category){
		$result = $this->db->row('SELECT * FROM up_lower_category WHERE c_id='.$category[0]['id']);
		return $result;
	}
}


 ?>
