<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Top_menu_Controller extends Controller{

	public function about_usAction(){
		$desc = 'Монтаж инженерный сетей и коммуникаций. Магазин отопительной ☀️ и климатической ❄️ техники. Днепр. ☎️: (098) 037-77-11, (050) 881-04-49. Монтаж, сервис, гарантия, качество.';
		$vars = [];
		$this->view->render('Автономное отопление Днепр ♨️/Монтаж инженерных сетей - "Ультрапром"', $vars, $desc);
	}

	public function servicesAction(){
    $desc = 'Монтаж отопления, водопровода, кондиционирования. В квартирах, домах, новостроях ⛪️. Днепр. ☎️: (098) 037-77-11, (050) 881-04-49. Монтаж, сервис, гарантия, качество.';
		$vars = [];
		$this->view->render('Монтаж инженерных систем и коммуникаций Днепр.', $vars, $desc);
	}

	public function pricesAction(){
		$desc = 'Прайс на монтаж отопления, водопровода, кондиционирования. В квартирах, домах, новостроях ⛪️. Днепр. ☎️: (098) 037-77-11, (050) 881-04-49. Монтаж, сервис, гарантия, качество.';
		$vars = [];
		$this->view->render('Ориентировочный прайс на услуги "Ультрапром".', $vars, $desc);
	}

	// public function heating_systemAction(){
	public function heating_systemAction(){
    $desc = 'Виды автономного отопление в Днепре. Оформление документов. ⚡ Тариф электроотопления. Газификация. Цена "Под ключ". ☎️: (098) 037-77-11, (050) 881-04-49.';
		$vars = [];
		$this->view->render('Автономное отопление. Виды. Стоимость. Порядок оформления. Газовое, электрическое ⚡.', $vars, $desc);
	}

	public function catalogAction(){
		$brands = $this->model->getBrands();
		$vars =[
			'brands' => $brands,
		];
    $desc = 'Котлы отопления, радиаторы, кондиционеры, теплый пол, обогреватели, полотенцесушители, бойлеры, газовые колонки, трубы, насосы, запорная арматура. ☎️: (098) 037-77-11, (050) 881-04-49.';
		$this->view->render('Каталог отопительной, климатической техники и комплектующих.', $vars, $desc);
	}

	public function contactsAction(){
    $desc = 'Ультрапром. Днепр. Контакты. Автономное отопление Днепр. Монтаж инженерных систем и коммуникаций. ☎️: (098) 037-77-11, (050) 881-04-49.';
		$vars = [];
		$this->view->render('Ультрапром - Контакты ✍', $vars, $desc);
	}

	public function price_listAction(){
		if($this->route['id'] == '1'){
			$this->view->path = 'top_menu/price1';
      $desc = 'Стоимость монтажных работ по отоплению, водопроводу и канализации. ☎️: (098) 037-77-11, (050) 881-04-49.';
			$vars = [];
			$this->view->render('Прайс (отопление, водоснабжение, канализация). Днепр.', $vars, $desc);
		}elseif($this->route['id'] == '2'){
			$this->view->path = 'top_menu/price2';
      $desc = 'Стоимость демонтажных работ. ☎: (098) 037-77-11, (050) 881-04-49.';
			$vars = [];
			$this->view->render('Прайс (демонтажные работы). Днепр.', $vars, $desc);
		}elseif($this->route['id'] == '3'){
			$this->view->path = 'top_menu/price3';
      $desc = 'Стоимость электромонтажных работ. ☎: (098) 037-77-11, (050) 881-04-49.';
			$vars = [];
			$this->view->render('Прайс (электромонтажные работы). Днепр.', $vars, $desc);
		}elseif($this->route['id'] == '4'){
			$this->view->path = 'top_menu/price4';
      $desc = 'Стоимость работ. ☎: (098) 037-77-11, (050) 881-04-49.';
			$vars = [];
			$this->view->render('Прайс (полы). Днепр.', $vars, $desc);
		}elseif($this->route['id'] == '5'){
			$this->view->path = 'top_menu/price5';
      $desc = 'Стоимость работ. ☎: (098) 037-77-11, (050) 881-04-49.';
			$vars = [];
			$this->view->render('Ultraprom - Прайс (потолки). Днепр.', $vars, $desc);
		}elseif($this->route['id'] == '6'){
			$this->view->path = 'top_menu/price6';
      $desc = 'Стоимость работ. ☎: (098) 037-77-11, (050) 881-04-49.';
			$vars = [];
			$this->view->render('Ultraprom - Прайс (стены). Днепр.', $vars, $desc);
		}elseif($this->route['id'] == '7'){
			$this->view->path = 'top_menu/price7';
      $desc = 'Стоимость работ. ☎: (098) 037-77-11, (050) 881-04-49.';
			$vars = [];
			$this->view->render('Ultraprom - Прайс (проемы, двери, окна). Днепр.', $vars, $desc);
		}elseif($this->route['id'] == '8'){
			$this->view->path = 'top_menu/price8';
      $desc = 'Стоимость работ. ☎: (098) 037-77-11, (050) 881-04-49.';
			$vars = [];
			$this->view->render('Ultraprom - Прайс (дополнительные работы). Днепр.', $vars, $desc);
		}elseif($this->route['id'] == 'montazh_konditsionerov'){
			$this->view->path = 'top_menu/montazh_konditsionerov';
      $desc = 'Стоимость работ. ☎: (098) 037-77-11, (050) 881-04-49.';
			$vars = [];
			$this->view->render('Ultraprom - Прайс (дополнительные работы). Днепр.', $vars, $desc);
		}
	}

	public function contacts_sendAction(){
		if(isset($_POST['email'])){
				$to = 'ultrapromdp@gmail.com'; //Почта получателя, через запятую можно указать сколько угодно адресов
				$subject = 'Обратная связь'; //Заголовок сообщения
				$message = '
										<html>
												<head>
														<title>'.$_POST['subject'].'</title>
												</head>
												<body>
														<p>Имя: '.$_POST['name'].'</p>
														<p>Email: '.$_POST['email'].'</p>
														<p>Сообщение: '.$_POST['message'].'</p>
												</body>
										</html>'; //Текст нашего сообщения можно использовать HTML теги
				$headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
				$headers .= "From: ultraprom <ultraprom@ultraprom.com>\r\n"; //Наименование и почта отправителя
				mail($to, $subject, $message, $headers);
		}
		return true;
	}

}


?>
