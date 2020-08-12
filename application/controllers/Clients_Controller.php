<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Clients_Controller extends Controller{

	public function callbackAction(){
		if(isset($_POST['phone'])){
				if(isset($_POST['comment'])){ $comment = $_POST['comment'];} else { $comment="";}
				if(isset($_POST['product'])){ $product = $_POST['product'];} else { $product="";}
				$to = 'ultrapromdp@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
				$subject = 'Клиент'; //Загаловок сообщения
				$message = '
										<html>
												<head>
														<title>'.$subject.'</title>
												</head>
												<body>
														<p>Телефон: '.$_POST['phone'].'</p>
														<p>Комментарий: '.$comment.'</p>
														<p>Товар: '.$product.'</p>
												</body>
										</html>'; //Текст нащего сообщения можно использовать HTML теги
				$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
				$headers .= "From: ultraprom <ultraprom@ultraprom.com>\r\n"; //Наименование и почта отправителя
				mail($to, $subject, $message, $headers);
		}
		return true;
	}

}


?>
