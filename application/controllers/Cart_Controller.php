<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

// if(empty($_SESSION['cart'])){
// 	$_SESSION['cart'] = array();
// };

class Cart_Controller extends Controller{

	public function mainAction(){
		$data = $_SESSION['cart'];
		$vars = [
			'data' => $data,
		];
		$this->view->render('Корзина', $vars);
	}

	public function get_cart_countAction(){
		echo count($_SESSION['cart']);
	}

	public function add_itemAction(){
		$items = [
			'id' => $_POST['id'],
			'title' => $_POST['title'],
			'price_uah' => $_POST['price_uah'],
			'eng_name' => $_POST['eng_name'],
			'quantity' => 1
		];
		array_push($_SESSION['cart'], $items);
		echo true;
	}

	public function empty_cartAction(){
		unset($_SESSION['cart']);
		echo true;
	}

	public function delete_itemAction(){
		array_splice($_SESSION['cart'], $_POST['index'], 1);
		echo true;
	}

	public function cart_orderAction(){
		// var_dump($_SESSION['cart']);
		foreach ($_SESSION['cart'] as $key => $value) {
			$items .= $value['quantity']." <a href='http://ultraprom.com.ua/product/"
								.$value['id']."'>"
								.$value['title'].'</a>, '
								.$value['price_uah'].' грн, '
								."<br>";
		};
		$to      = 'ultrapromdp@gmail.com';
		$subject = 'Заказ';
		$headers .= "From: ultraprom <ultraprom@ultraprom.com>\r\n"; //Наименование и почта отправителя
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$message = "<html>
									<head>
									  <title>Заказ</title>
									</head>
									<body>
										Имя: ".$_POST['uname']."<br>"
										."Телефон: ".$_POST['uphone']."<br>"
										."Email: ".$_POST['umail']."<br>"
										."Город: ".$_POST['ucity']."<br>"
										."Адрес: ".$_POST['uaddr']."<br>"
										."Доставка: ".$_POST['uhow']."<br>"
										."Оплата: ".$_POST['upay']."<br>"
										."Комментарий: ".$_POST['ucomment']."<br>"
										."Заказ: <br>"
										.$items
										."Итого: ".$_POST['total_price'].' грн'."<br>
									</body>
								</html>";
		mail($to, $subject, $message, $headers);
		echo true;
	}
}


?>
