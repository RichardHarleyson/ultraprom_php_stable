<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Product_Controller extends Controller{

	public function pageAction(){
		$product = $this->model->getProduct($this->route['id']);
		// debug($product);
		if(empty($product)){
			$this->redirect('');
			// echo 'Smth went wrong';
		}
		$same_products = $this->model->get_same_products($product[0]['category_id']);
		$reviews = $this->model->get_reviews($product[0]['id']);
		// var_dump($reviews);
		$lcategory_ename = $this->model->lcategory_ename($product[0]['category_id']);
		// var_dump($lcategory_ename);
		$category_ename = $this->model->category_ename($lcategory_ename[0]['c_id']);
		$manufacturer = $this->model->get_manufacturer($product[0]['manufacturer_id']);
		// var_dump($category_ename);
		$vars = [
			'product' => $product,
			'same_products' => $same_products,
			'lcategory_ename' => $lcategory_ename,
			'category_ename' => $category_ename,
			'reviews' => $reviews,
			'manufacturer' => $manufacturer,
		];
		$title = ''.$product[0]['title'].'. ✅ Цена '.number_format($product[0]['price_uah'], 0, ',', ' ').' грн.';
		$desc = ''.$product[0]['title'].'. Купить в Днепре. ✅ Лучшая цена '.number_format($product[0]['price_uah'], 0, ',', ' ').' грн. Сервис, гарантия, качество. ✈️ Доставка. ☎️: (098) 037-77-11, (050) 881-04-49.';
		$this->view->render($title, $vars, $desc, '/public/media/uploads/'.$product[0]['image'], '/product/'.$product[0]['eng_name']);
	}

	public function new_reviewAction(){
		// var_dump($review);
		var_dump($_POST);
		$review = [
			'product_id' => $_POST['product_id'],
			'uname' => $_POST['uname'],
			'review' => $_POST['review'],
			'rating' => $_POST['rating'],
		];
		$result = $this->model->new_review($review);
		// Обновляем рейтинг товара по отзывам
	}

}

 ?>
