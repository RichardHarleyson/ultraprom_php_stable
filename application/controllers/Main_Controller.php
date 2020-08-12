<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Main_Controller extends Controller{
// Главная страница
	public function indexAction(){
		$products = $this->model->getProducts();
		$products_onsale = $this->model->getProducts_onsale();
		$products_popular = $this->model->getProducts_popular();
		$slides = $this->model->getSlides();
		$vars =[
			'products' => $products,
			'onsale' => $products_onsale,
			'slides' => $slides,
			'popular' => $products_popular,
			'c_indicator' =>0,
		];
		// Description
		$desc = 'Монтаж и узаконение автономного отопление в Днепре. Установка систем отопления любой сложности. Магазин отопительной техники. ☎: (098) 037-77-11, (050) 881-04-49. Монтаж, сервис, гарантия, качество.';
		$this->view->render('Автономное отопление Днепр. Монтаж систем отопления - "Ультрапром"', $vars, $desc);
	}
// Страница поиска товаров с главной
	public function search_pageAction(){
		$result_brand = $this->model->get_search($_POST['query']);
		$vars = [
			'result' => $result_brand,
		];
		// Description
		$desc = 'Монтаж и узаконение автономного отопление в Днепре. Установка систем отопления любой сложности. Магазин отопительной техники. ☎: (098) 037-77-11, (050) 881-04-49. Монтаж, сервис, гарантия, качество.';
		$this->view->render('Автономное отопление Днепр. Монтаж систем отопления - "Ультрапром"', $vars, $desc);
	}

// Страница поиска по брендам с главной
	public function brand_searchAction(){
		// Найти id производителя по его названию
		$m_info = $this->model->getManufacturer($this->route['brand']);
		$brand['manufacturer_id'] = $m_info[0]['id'];
		$result = $this->model->brand_search($brand);
		$vars = [
			'result' => $result,
		];
		// $this->view->path = '/brand_search/'.$m_info[0]['m_name'];
		$this->view->path = '/main/search_page';
		// Description
		$desc = 'Монтаж и узаконение автономного отопление в Днепре. Установка систем отопления любой сложности. Магазин отопительной техники. ☎: (098) 037-77-11, (050) 881-04-49. Монтаж, сервис, гарантия, качество.';
		$this->view->render('Автономное отопление Днепр. Монтаж систем отопления - "Ультрапром"', $vars, $desc);
	}

	public function sitemapAction(){
		$this->view->layout = 'sitemap';
		$this->view->render();
	}


}

 ?>
