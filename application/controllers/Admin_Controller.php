<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Admin_Controller extends Controller{

	public function loginAction(){
		$this->view->layout = 'empty';
		$this->view->render('Ultraprom - Вход в Панель Администратора');
	}

	public function log_inAction(){
		// login: ultraprom
		// pass: zakharov
		$login_str = md5(strtolower($_POST['login'].$_POST['pass']));
		if($login_str == 'd6087a60d8e8137561bd09c79b7da636'){
			$_SESSION['admin'] = true;
			echo 1;
		}else{
			echo 0;
		}
	}

	public function panelAction(){
		$this->view->layout = 'admin';
		$global_category = $this->model->get_global_categoroies();
		$category = $this->model->get_categoroies();
		$lower_category = $this->model->get_lower_categoroies();
		$manufacturer = $this->model->get_manufacturer();
		$slides = $this->model->get_slides();
		$reviews = $this->model->get_reviews();
		$vars = [
			'global_category' => $global_category,
			'category' => $category,
			'lower_category' => $lower_category,
			'manufacturer' => $manufacturer,
			'slides' => $slides,
			'reviews' => $reviews,
		];
		$this->view->render('Ultraprom - Панель Администратора', $vars);
	}

	public function add_categoryAction(){
		$category['c_name'] = $_POST['category_name'];
		$category['eng_name'] = $this->translit($category['c_name']);
		$category['gc_id'] = $_POST['global_category'];
		// var_dump($category);
		$result = $this->model->add_category($category);
		echo $result;
	}

	public function add_lower_categoryAction(){
		$category['lc_name'] = $_POST['lower_category_name'];
		$category['eng_name'] = $this->translit($category['lc_name']);
		$category['lc_image'] = $this->add_image('lower_category_image');
		$category['c_id'] = (int)$_POST['category'];
		var_dump($category);
		$result = $this->model->add_lower_category($category);
		var_dump($result);
	}

	public function upd_lower_categoryAction(){
		$lcategory['lc_image'] = $this->add_image('lower_category_image');
		$lcategory['id'] = $_POST['lcategory_list'];
		var_dump($lcategory);
		$result = $this->model->upd_lcategory($lcategory);
		var_dump($result);
	}

	public function upd_categoryAction(){
		$category['c_image'] = $this->add_image('category_image');
		$category['id'] = $_POST['category_list'];
		var_dump($category);
		$result = $this->model->upd_category($category);
		var_dump($result);
	}

	public function update_gcategoryAction(){
		$gcategory['id'] = $_POST['id'];
		$gcategory['gc_name'] = $_POST['gc_name'];
		$gcategory['eng_name'] = $this->translit($_POST['gc_name']);
		$result = $this->model->update_gcategory($gcategory);
		var_dump($gcategory);
	}

	public function update_categoryAction(){
		$category['id'] = $_POST['id'];
		$category['c_name'] = $_POST['c_name'];
		$category['eng_name'] = $this->translit($_POST['c_name']);
		$result = $this->model->update_category($category);
		var_dump($category);
	}

	public function update_lcategoryAction(){
		$lcategory['id'] = $_POST['id'];
		$lcategory['lc_name'] = $_POST['lc_name'];
		$lcategory['eng_name'] = $this->translit($_POST['lc_name']);
		$result = $this->model->update_lcategory($lcategory);
		var_dump($lcategory);
	}

	public function update_slide_hrefAction(){
		$slide['id'] = $_POST['id'];
		$slide['slide_href'] = $_POST['slide_href'];
		$result = $this->model->update_slide_href($slide);
		var_dump($slide);
	}

	public function add_manufacturerAction(){
		$manufacturer['m_name'] = $_POST['manufacturer_name'];
		$manufacturer['m_image'] = $this->add_image('manufacturer_image');
		// var_dump($manufacturer);
		$result = $this->model->add_manufacturer($manufacturer);
		echo $result;
	}

	public function add_slideAction(){
		$slide['s_image'] = $this->add_image('slide_image');
		$slide['s_url'] = $_POST['slide_url'];
		echo $this->model->add_slide($slide);
	}

	public function upd_reviewsAction(){
		var_dump($_POST);
		if($_POST['r_status'] == 0){
			echo $this->model->del_review($_POST['review_id']);
			return 1;
		}
		$review['id'] = $_POST['review_id'];
		$review['status'] = $_POST['r_status'];
		echo $this->model->upd_reviews($review);
		$get_reviews = $this->model->get_reviews_2($_POST['product_id']);
		var_dump($get_reviews);
		$total_review = 0;
		foreach ($get_reviews as $key => $value) {
			$total_review += $value['rating'];
		}
		var_dump($total_review);
		$count_reviews = count($get_reviews);
		if($count_reviews == 0){
			$count_reviews = 1;
		}
		$new_rating = (int)($total_review / $count_reviews);
		var_dump($new_rating);
		$result = $this->model->update_rating($new_rating, $_POST['product_id']);
		var_dump($result);
		return 1;
	}

	public function del_categoryAction(){
		$category['id'] = $_POST['category_id'];
		$result = $this->model->del_category($category);
		echo $result;
	}

	public function del_lcategoryAction(){
		$lcategory['id'] = $_POST['lcategory_id'];
		$result = $this->model->del_lcategory($lcategory);
		echo $result;
	}

	public function del_manufacturerAction(){
		$manufacturer['id'] = $_POST['manufacturer_id'];
		$result = $this->model->del_manufacturer($manufacturer);
		echo $result;
	}

	public function del_slideAction(){
		return $this->model->del_slide($_POST['slide_id']);
	}

	public function productsAction(){
		$this->view->layout = 'admin';
		$lcategories = $this->model->get_lower_categoroies();
		$manufacturers = $this->model->get_manufacturer();
		$products = $this->model->get_products();
		$vars = [
			'categories' => $lcategories,
			'products' => $products,
			'manufacturers' => $manufacturers,
		];
		$this->view->render('Ultraprom - Товары', $vars);
	}

	public function add_image($img_key){
		// var_dump($_FILES);
		$target_dir = "/home/newworld/domains/ultraprom.com.ua/public_html/public/media/uploads/";
		$target_file = $target_dir . basename($_FILES[$img_key]["name"]);

		$name = pathinfo($_FILES[$img_key]['name'], PATHINFO_FILENAME);
		$extension = pathinfo($_FILES[$img_key]['name'], PATHINFO_EXTENSION);
		$i = 0;
		while(file_exists($target_file)){
			$target_file = $target_dir . $name . $i . '.' . $extension;
			$i++;
		}
		$target_file = $target_dir . $name . $i . '.' . $extension;

		if (move_uploaded_file($_FILES[$img_key]["tmp_name"], $target_file)) {
			 // echo "Товар ".$vars['title']." успешно загружен";
			return $name.$i.'.'.$extension;
		} else {
			 echo 'Установите Фото';
		}
	}

	public function create_productAction(){
		if(isset($_POST['title'])){
			foreach ($_POST as $key => $value) {
				$vars[$key] = $value;
			}
			// var_dump($vars);
			if(array_key_exists( 'photo' , $vars)){
				if($vars['photo'] == ''){
					echo 'Не Найдено Фото Товара';
				}
			}else{
				$vars['photo'] = $this->add_image('photo');
				$vars['status'] = 1;
			}

			$vars['eng_name'] = $this->translit($vars['title']);
			//Проверяем есть ли товар с такой ссылкой
			$i = 0;
			$product_exist['eng_name'] = $vars['eng_name'];
			// echo $this->model->product_exist($product_exist);
			// exit();
			while(!(empty($this->model->product_exist($product_exist)))){
				$vars['eng_name'] = $vars['eng_name'].'_';
				$product_exist['eng_name'] = $vars['eng_name'];
				$i++;
				if($i==3){
					echo 'Товары с таким именем уже есть';
					exit();
				}
			}

			if(array_key_exists( 'available' , $vars)){
				if($vars['available'] == 'on'){
					$vars['available'] = 1;
				}
			}else{
				$vars['available'] = 0;
			}

			if(array_key_exists( 'onsale' , $vars)){
				if($vars['onsale'] == 'on'){
					$vars['onsale'] = 1;
				}
			}else{
				$vars['onsale']	= 0;
			}

			if(array_key_exists( 'popular' , $vars)){
				if($vars['popular'] == 'on'){
					$vars['popular'] = 1;
				}
			}else{
				$vars['popular']	= 0;
			}

			$vars['manufacturer'] = 1;

			$vars['stat_list'] = trim($vars['param_string'], ';');
			$vars['stat_list'] = str_replace('"', "'", $vars['stat_list']);

			// filter_info
			$filter_info = array_filter(
				$vars,
				function($key){
					return(strpos($key, 'filter_') !== false);
				},
				ARRAY_FILTER_USE_KEY
			);
			$filter_info_str = '';
			foreach ($filter_info as $key => $value) {
				$filter_info_str .= $key.':'.ucwords($value).';';
			};
			$filter_info_str = trim($filter_info_str, ';');
			$vars['filter_info'] = str_replace('"', "'", $filter_info_str);

			// обновляем цену от валюты
			$currencies = $this->model->get_currencies();
			$curr_buy = [];
			foreach ($currencies as $curr) {
				$curr_buy[$curr['id']] = $curr;
			}
			$vars['price_uah'] = $vars['price'] * $curr_buy[$vars['currency']]['sale'];
			$result = $this->model->create_product($vars);
			var_dump($vars);
			// echo 'Товар Успешно Добавлен';
		}
	}

	public function product_updateAction(){
		if($_POST['del'] == 'true'){
			// Удаляем запись
			$result = $this->model->product_del($_POST['item_id']);
			return $result;
		}
		$product = [
			'id' => $_POST['id'],
			'title' => $_POST['item_title'],
			'article' => $_POST['item_article'],
			'price' => (float)$_POST['item_price'],
			'currency' => (int)$_POST['item_currency'],
			'price_uah' => 0,
			// 'stat_list' => $_POST['param_string'],
			'description' => $_POST['item_description'],
		];
		// $product['stat_list'] = trim($product['stat_list'], ';');

		if(array_key_exists( 'item_available' , $_POST)){
			if($_POST['item_available'] == 'on'){
				$product['available'] = 1;
			}
		}else{
			$product['available'] = 0;
		}
		if(array_key_exists( 'item_onsale' , $_POST)){
			if($_POST['item_onsale'] == 'on'){
				$product['onsale'] = 1;
			}
		}else{
			$product['onsale']	= 0;
		}
		if(array_key_exists( 'item_popular' , $_POST)){
			if($_POST['item_popular'] == 'on'){
				$product['popular'] = 1;
			}
		}else{
			$product['popular']	= 0;
		}
		//Обновляем цену по валюте
		$currencies = $this->model->get_currencies();
		$curr_buy = [];
		foreach ($currencies as $curr) {
			$curr_buy[$curr['id']] = $curr;
		}
		$product['price_uah'] = $product['price'] * $curr_buy[$_POST['item_currency']]['sale'];

		$result = $this->model->product_update($product);
		if(!(empty($_FILES['photo']['name']))){
			$photo_upd = array();
			$photo_upd['photo'] = $this->add_image('photo');
			$photo_upd['id'] = $_POST['id'];
			$result = $this->model->update_photo($photo_upd);
		}
	}

	public function upd_paramsAction(){
		$vars['id'] = $_POST['product_id'];
		$vars['stat_list'] = $_POST['param_string'];
		$vars['stat_list'] = trim($vars['stat_list'], ';');
		$vars['stat_list'] = str_replace('"', "'",$vars['stat_list']);
		$result = $this->model->update_params($vars);
		echo $result;
	}

	public function copy_itemAction(){
		$vars['id'] = $_POST['product_id'];
		echo json_encode(($this->model->get_copy_item($vars))[0]);
	}

	public function currencyAction(){
		$this->view->layout = 'admin';
		$currency_json = json_decode(file_get_contents('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5', true));
		$vars =[
			'currency' => $currency_json,
		];
		$this->view->render('Ultraprom - Валюты', $vars);
	}

	public function currency_auto_updateAction(){
		$data =[
			'usd_buy' => $_POST['usd_buy'],
			'usd_sale' => $_POST['usd_sale'],
			'eur_buy' => $_POST['eur_buy'],
			'eur_sale' => $_POST['eur_sale'],
		];
		$result = $this->model->set_currency($data);
		//обновляем ценники в соответствии с курсом
		$this->model->update_prices();
		echo 1;
	}

	public function update_filterAction(){
		$filter_info = array_filter(
			$_POST,
			function($key){
				return(strpos($key, 'filter_') !== false);
			},
			ARRAY_FILTER_USE_KEY
		);
		$filter_info_str = '';
		foreach ($filter_info as $key => $value) {
			$filter_info_str .= $key.':'.ucwords($value).';';
		};
		$filter_info_str = trim($filter_info_str, ';');
		$vars['filter_info'] = str_replace('"', "'",$filter_info_str);
		$vars['product_id'] = $_POST['product_id'];
		$product['id'] = $_POST['product_id'];
		$product['m_id'] = $_POST['manufacturer_id'];
		var_dump($this->model->upd_product_manufacturer($product));
		$result = $this->model->update_filter($vars);
		var_dump($result);
	}

}


?>
