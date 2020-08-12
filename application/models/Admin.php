<?php
namespace application\models;

use application\core\Model;

class Admin extends Model{

	public function create_product($vars){
		$data =[
			$vars['title'],
			$vars['eng_name'],
			$vars['photo'],
			$vars['article'],
			(float)$vars['price'],
			(int)$vars['currency'],
			(float)$vars['price_uah'],
			(int)$vars['onsale'],
			(int)$vars['popular'],
			$vars['description'],
			(int)$vars['rating'],
			(int)$vars['category'],
			(int)$vars['m_id'],
			0, // power_id
			$vars['stat_list'], // stat_list
			$vars['filter_info'],
			(int)$vars['available'],
			(int)$vars['status'],
		];

		$result = $this->db->insert_query("INSERT INTO up_product(`title`,`eng_name`, `image`, `article`, `price`, `currency`, `price_uah`,
			`onsale`, `popular`, `description`, `rating`, `category_id`, `manufacturer_id`, `power_id`, `stat_list`, `filter_info`,
			`available`, `status`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)", $data);
		return $data;
	}

	public function get_global_categoroies(){
		$result = $this->db->row('SELECT * FROM up_global_category');
		return $result;
	}

	public function get_categoroies(){
		$result = $this->db->row('SELECT * FROM up_category ORDER BY c_name DESC');
		return $result;
	}

	public function get_lower_categoroies(){
		$result = $this->db->row('SELECT * FROM up_lower_category ORDER BY id ASC');
		return $result;
	}

	public function get_manufacturer(){
		$result = $this->db->row('SELECT * FROM up_manufacturer ORDER BY m_name ASC');
		return $result;
	}

	public function get_products(){
		$result = $this->db->row('SELECT * FROM up_product WHERE status=1');
		return $result;
	}

	public function get_slides(){
		return $this->db->row('SELECT * FROM up_slides');
	}

	public function get_reviews(){
		return $this->db->row('SELECT * FROM up_comments WHERE status=0');
	}

	public function upd_reviews($status){
		return $this->db->insert_query('UPDATE up_comments SET status=:status WHERE id=:id',$status);
	}

	public function add_category($category){
		// $result = $this->db->insert_query('INSERT INTO up_comments(uname, comment, rating, product_id) VALUES (:uname, :review, :rating, :product_id)', $review);
		$result = $this->db->insert_query('INSERT INTO up_category(c_name, eng_name, gc_id) VALUES (:c_name, :eng_name, :gc_id)', $category);
		return $result;
	}

	public function add_lower_category($lcategory){
		// $result = $this->db->insert_query('INSERT INTO up_lower_category (lc_name, eng_name, lc_image, c_id) VALUES (:)')
		$result = $this->db->insert_query('INSERT INTO up_lower_category (lc_name, eng_name, lc_image, c_id) VALUES (:lc_name, :eng_name, :lc_image, :c_id)', $lcategory);
		return $result;
	}

	public function add_manufacturer($manufacturer){
		$result = $this->db->insert_query('INSERT INTO up_manufacturer (m_name,  m_image) VALUES (:m_name, :m_image)', $manufacturer);
		return $result;
	}

	public function add_slide($slide){
		$result = $this->db->insert_query('INSERT INTO up_slides (s_url, s_image) VALUES (:s_url, :s_image)',$slide);
	}

	public function update_gcategory($data){
		return $this->db->insert_query('UPDATE up_global_category SET gc_name=:gc_name, eng_name=:eng_name WHERE id=:id', $data);
	}

	public function update_category($data){
		return $this->db->insert_query('UPDATE up_category SET c_name=:c_name, eng_name=:eng_name WHERE id=:id', $data);
	}

	public function update_lcategory($data){
		return $this->db->insert_query('UPDATE up_lower_category SET lc_name=:lc_name, eng_name=:eng_name WHERE id=:id', $data);
	}

	public function update_slide_href($data){
		return $this->db->insert_query('UPDATE up_slides SET s_url=:slide_href WHERE id=:id', $data);
	}

	public function upd_category($category){
		return $this->db->insert_query('UPDATE up_category SET c_image=:c_image WHERE id=:id', $category);
	}

	public function upd_lcategory($lcategory){
		return $this->db->insert_query('UPDATE up_lower_category SET lc_image=:lc_image WHERE id=:id', $lcategory);
	}

	public function del_category($id){
		return $this->db->row('DELETE FROM up_category WHERE id=:id', $id);
	}

	public function del_lcategory($id){
		return $this->db->row('DELETE FROM up_lower_category WHERE id=:id', $id);
	}

	public function del_manufacturer($manufacturer){
		$result = $this->db->row('DELETE FROM up_manufacturer WHERE id=:id',$manufacturer);
		return $result;
	}

	public function del_slide($id){
		return $this->db->row('DELETE FROM up_slides WHERE id='.$id);
	}

	public function update_rating($rating, $id){
		$result = $this->db->insert_query('UPDATE up_product SET rating='.$rating.' WHERE id='.$id);
		return $result;
	}

	public function get_reviews_2($id){
		$result = $this->db->row('SELECT rating FROM up_comments WHERE product_id='.$id.' AND status=1');
		return $result;
	}

	public function del_review($id){
		return $this->db->row('DELETE FROM up_comments WHERE id='.$id);
	}

	public function product_exist($product){
		return $this->db->row('SELECT id FROM up_product WHERE eng_name=:eng_name',$product);
	}

	public function product_update($product){
		$result = $this->db->insert_query("UPDATE up_product SET title=:title,  price=:price, article=:article, currency=:currency, price_uah=:price_uah, description=:description,
		onsale=:onsale, available=:available, popular=:popular WHERE id=:id", $product);
		return $result;
	}

	public function upd_product_manufacturer($product){
		return $this->db->insert_query("UPDATE up_product SET manufacturer_id=:m_id WHERE id=:id", $product);
	}

	public function update_photo($product){
		$result = $this->db->insert_query("UPDATE up_product SET image=:photo WHERE id=:id", $product);
		return $result;
	}

	public function update_params($params){
		return $this->db->insert_query("UPDATE up_product SET stat_list=:stat_list WHERE id=:id", $params);
	}

	public function update_filter($params){
		return $this->db->insert_query("UPDATE up_product SET filter_info=:filter_info WHERE id=:product_id", $params);
	}

	public function get_copy_item($vars){
		return $this->db->row("SELECT * FROM up_product WHERE id=:id", $vars);
	}

	public function product_del($id){
		$result = $this->db->insert_query("DELETE FROM up_product WHERE id=".$id);
		return $result;
	}

	public function set_currency($data){
		try{
			$this->db->row('UPDATE up_currency SET sale='.$data['usd_sale'].', buy='.$data['usd_buy'].' WHERE id=2');
			$this->db->row('UPDATE up_currency SET sale='.$data['eur_sale'].', buy='.$data['eur_buy'].' WHERE id=3');
		}catch( PDOException $Exception ) {
			throw new MyDatabaseException( $Exception->getMessage( ) , (int)$Exception->getCode( ) );
		}
	}

	public function update_prices(){
		$products = $this->db->row('SELECT id, price, currency FROM up_product');
		$currency = $this->db->row('SELECT id, buy, sale FROM up_currency');
		$cur_buy = [];
		foreach ($currency as $curr) {
			$cur_buy[$curr['id']] = $curr;
		}
		foreach ($products as $product) {
			$new_price = $product['price'] * $cur_buy[$product['currency']]['sale'];
			$this->db->row('UPDATE up_product SET price_uah='.(int)$new_price.' WHERE id='.$product['id']);
		}
	}

	public function get_currencies(){
		return	$this->db->row('SELECT id, sale, buy FROM up_currency');
	}

}


 ?>
