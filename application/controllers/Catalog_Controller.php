<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class Catalog_Controller extends Controller{

	//глобальный чистый каталог
	public function mainAction(){
		$result = $this->model->getProducts();
		$vars = [
			'result' => $result,
		];
		$this->view->render('Каталог', $vars, $desc, '/public/media/uploads/Kategoriya/otopitelnaya_tehnika.jpg', '/catalog/Tverdotoplivnie_kotli');
	}

	// Роутер каталога по категории товаров + сортировка
	public function catalog_routerAction(){
		$method = $this->route['product'];
		$category = $this->get_category($method);
		if(isset($this->route['type'])){
			$result = $this->model->getProducts_sorted($category, $this->route['type']);
			$this->$method($category,  $result);
		}else{
			$this->$method($category);
		}

	}

	public function gcatalogAction(){
		$category = $this->route['category'];
		$getcategory = $this->model->getCategories($category);
		$lcategory = $this->model->getLcategory($getcategory);
		$vars = [
			'category' => $getcategory,
			'lcategory' => $lcategory,
		];
		$title = ''.$vars['category'][0]['c_name'].' купить по лучшей цене в Украине.';
		$desc = $vars['category'][0]['c_name'].' купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render($title, $vars, $desc, '/public/media/uploads/Kategoriya/otopitelnaya_tehnika.jpg', '/catalog/Tverdotoplivnie_kotli');
	}

	// Определяем категорию товаров
	public function get_category($product){
		// вытащить id категории из базы
		$categories = $this->model->getCategory();
		foreach ($categories as $item) {
			if($item['eng_name'] == $product){
				$category = $item['id'];
				return $category;
			}else{
			}
		}
		return $category;
	}

	// Категория: настенные газовые котлы
	public function Nastennie_gazovie_kotli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Настенные газовые котлы',
			'data_title'=>'Nastennie_gazovie_kotli',
			'filter_data' => [
				'Производитель' => [
					'Ariston','Baxi','Beretta','Bosch','Buderus','Ferroli','Immergas',
					'Protherm','Vaillant','Viessmann','Westen','Saunier Duval',
				],
				'Тепловая Мощность' => [
					 'До 20 кВт','20 - 24 кВт','24 - 30 кВт','30 – 40 кВт','Свыше 40 кВт',
				],
				'Отапливаемая площадь' => [
					'До 120 м2','До 200 м2','До 250 м2','До 300 м2','До 400 м2','Свыше 400 м2',
				],
				'Количество контуров' => [
					'Одноконтурный', 'Двухконтурный', 'Двухконтурный + бойлер',
				],
				'Отвод продуктов сгорания' => [
					 'Турбированный (Turbo)', 'Дымоходный (Atmo)',
				],
				'Страна Производителя' => [
					'Германия','Италия','Корея','Франция','Турция','Китай','Словакия',
					'Португалия','Польша','Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_power','filter_heating_square',
				'filter_contur','filter_burn_cam','filter_country'],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Настенные газовые котлы', $vars, $desc, '/public/media/uploads/10.jpg', '/catalog/Nastennie_gazovie_kotli');
	}

	// Категория: напольные газовые котлы
	public function Napolynie_gazovie_kotli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Напольные газовые котлы',
			'data_title'=>'Napolynie_gazovie_kotli',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Beretta', 'Bosch', 'Buderus', 'Protherm', 'Vailant', 'Viessmann',
				],
				'Тепловая Мощность' => [
					 'До 20 кВт','20 - 24 кВт','24 - 30 кВт','30 – 40 кВт','40 – 50 кВт',
					 '50 - 100 кВт','Свыше 100 кВт',
				],
				'Отапливаемая площадь' => [
					'До 120 м2','До 200 м2','До 250 м2','До 300 м2','До 400 м2','До 500 м2',
					'Свыше 500 м2',
				],
				'Количество контуров' => [
					'Одноконтурный', 'Двухконтурный',
				],
				'Отвод продуктов сгорания' => [
					'Турбированный (Turbo)', 'Дымоходный (Atmo)'
				],
				'Страна Производителя' => [
					'Германия', 'Италия', 'Турция', 'Словакия', 'Португалия', 'Польша', 'Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_power','filter_heating_square',
				'filter_contur','filter_burn_cam','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Напольные газовые котлы', $vars, $desc, '/public/media/uploads/20.jpg', '/catalog/Napolynie_gazovie_kotli');
	}

	// Категория: Конденсационные Газовые Котлы
	public function Kondensatsionnie_gazovie_kotli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Конденсационные газовые котлы',
			'data_title'=>'Kondensatsionnie_gazovie_kotli',
			'filter_data' => [
				'Производитель' => [
					'Ariston','Baxi','Beretta','Bosch','Buderus','Ferroli','Immergas',
					'Protherm','Vaillant','Viessmann','Westen','Saunier Duval',
				],
				'Тепловая Мощность' => [
					 'До 20 кВт','20 - 24 кВт','24 - 30 кВт','30 – 40 кВт','Свыше 40 кВт',
				],
				'Отапливаемая площадь' => [
					'До 120 м2','До 200 м2','До 250 м2','До 300 м2','До 400 м2','Свыше 400 м2',
				],
				'Количество контуров' => [
					'Одноконтурный', 'Двухконтурный', 'Двухконтурны с Бойлером',
				],
				'Страна Производителя' => [
					'Германия','Италия','Корея','Франция','Турция','Китай','Словакия',
					'Португалия','Польша','Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_power','filter_heating_square',
				'filter_contur','filter_country'],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Конденсационные газовые котлы', $vars, $desc, '/public/media/uploads/30.jpg', '/catalog/Kondensatsionnie_gazovie_kotli');
	}

	// Категория: Электрические Котлы
	public function Elektricheskie_kotli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Электрические котлы',
			'data_title'=>'Elektricheskie_kotli',
			'filter_data' => [
				'Производитель' => [
					'Bosch','Ferroli','Hi-Therm', 'Hot-well', 'Kospel','Mora-top','Protherm',
					'Tenko', 'Vaillant', 'Титан', 'Днепр',
				],
				'Электрическая Мощность' => [
					 '3 - 5 кВт','6 - 10 кВт','11 - 15 кВт','16 - 20 кВт','21 - 25 кВт',
					 '26 - 30 кВт','36 - 40 кВт','41 - 45 кВт','51 - 60 кВт',
				],
				'Напряжение Питания' => [
					 '220','380','220-380'
				],
				'Отапливаемая площадь' => [
					'До 50 м2','До 80 м2','До 100 м2','До 120 м2','До 200 м2','До 250 м2',
					'До 300 м2','До 400 м2','Свыше 400 м2',
				],
				'Наличие насоса' => [
					'Есть', 'Нет',
				],
				'Расширительный Бак' => [
					'Есть', 'Нет',
				],
				'Страна Производителя' => [
					'Германия','Италия','Корея','Франция','Турция','Китай','Украина','Словакия',
					'Португалия','Польша','Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_epower','filter_napryajenie',
				'filter_heating_square','filter_nasos','filter_extbarrel','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Электрические котлы', $vars, $desc, '/public/media/uploads/40.jpg', '/catalog/Elektricheskie_kotli');
	}

	// Категория: Твердотопливные Котлы
	public function Tverdotoplivnie_kotli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Твердотопливные котлы',
			'data_title'=>'Tverdotoplivnie_kotli',
			'filter_data' => [
				'Производитель' => [
					'ATON','Altep','Baxi','Bosch','Buderus','Defro','Kronvas','Viadrus','Данко',
				],
				'Тепловая Мощность' => [
					 'До 20 кВт','20 - 24 кВт','24 - 30 кВт','30 – 40 кВт','Свыше 40 кВт',
				],
				'Отапливаемая площадь' => [
					'До 120 м2','До 200 м2','До 250 м2','До 300 м2','До 400 м2','До 600 м2',
					'До 800 м2','Свыше 800 м2',
				],
				'Теплообменник' => [
					 'Стальной', 'Чугунный',
				],
				'Управление' => [
					 'Механическое', 'Электронное',
				],
				'Страна Производителя' => [
					'Германия','Италия','Турция','Украина','Польша','Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_power', 'filter_heating_square',
				'filter_tteploobmen', 'filter_controller', 'filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Твердотопливные котлы', $vars, $desc, '/public/media/uploads/50.jpg', '/catalog/Tverdotoplivnie_kotli');
	}
	// Категория: Комплектующие для Котлов
	public function Komplektuyushtie_dlya_kotlov($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Комплектующие для котлов',
			'data_title'=>'Komplektuyushtie_dlya_kotlov',
			'filter_data' => [
				'Производитель' => [
					'Baxi', 'Beretta', 'Bosch', 'Buderus', 'Ferroli', 'Protherm', 'Vaillant',
					 'Viessmann', 'Westen',
				],
			],
			'filter_headers' => ['filter_manufacturer',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Комплектующие для котлов', $vars, $desc, '/public/media/uploads/60.jpg', '/catalog/Komplektuyushtie_dlya_kotlov');
	}
	// Категория: Стальные Радиаторы
	public function Stalynie_radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Стальные радиаторы',
			'data_title'=>'Stalynie_radiatori',
			'filter_data' => [
				'Производитель' => [
					'Djoul','DaVinci','Energy','Kermi','Korado','Purmo','Terra Teknik',
					'Copa','Krafter','Tiberis',
				],
				'Тип радиатора' => [
					'Тип 11', 'Тип 22', 'Тип 33',
				],
				'Высота радиатора(мм)' => [
					 '200','300', '400', '500', '600', '900',
				],
				'Длинна радиатора(мм)' => [
					 '400','500','600','700','800','900','1000','1100','1200','1300','1400','1500',
					 '1600','1700','1800','1900','2000','2100','2200','2300','2400','2500','2600','2700',
					 '2800','2900','3000',
				],
				'Подключение' =>[
					 'Боковое', 'Нижнее',
				],
				'Страна Производителя' => [
						'Германия','Польша','Украина','Турция','Италия','Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_rad_type','filter_rad_height','filter_rad_length','filter_rad_conn','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Стальные радиаторы', $vars, $desc, '/public/media/uploads/70.jpg', '/catalog/Stalynie_radiatori');
	}
	// Категория: Алюминиевые Радиаторы
	public function Alyuminievie_radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Алюминиевые радиаторы',
			'data_title'=>'Alyuminievie_radiatori',
			'filter_data' => [
				'Производитель' => [
					'BOHEMIA','DaVinci','Mirado','Global','MAREK','Tianrun','PASKAL',
				],
				'Глубина Секции, мм' => [
					 '80','85','88','90','96','100',
				],
				'Межосевое расстояние, мм' => [
					 '200','350','500','800','1600',
				],
				'Подключение' => [
					 'Боковое','Нижнее'
				],
				'Страна Производителя' => [
					'Великобритания','Германия','Польша','Украина','Италия','Словакия','Китай'
				],
			],
		'filter_headers' => ['filter_manufacturer','filter_deep_sec','filter_apex','filter_rad_conn','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Алюминиевые радиаторы', $vars, $desc, '/public/media/uploads/80.jpg', '/catalog/Alyuminievie_radiatori');
	}
	// Категория: Биметаллические Радиаторы
	public function Bimetallicheskie_radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Биметаллические радиаторы',
			'data_title'=>'Bimetallicheskie_radiatori',
			'filter_data' => [
					'Производитель' => [
						'BOHEMIA','DaVinci','Mirado','Global','MAREK','Tianrun','PASKAL',
					],
					'Глубина Секции, мм' => [
						 '80','85','88','90','96','100',
					],
					'Межосевое расстояние, мм' => [
						 '200','350','500','800','1600',
					],
					'Подключение' => [
						 'Боковое','Нижнее'
					],
					'Страна Производителя' => [
						'Великобритания','Германия','Польша','Украина','Италия','Словакия','Китай'
					],
				],
			'filter_headers' => ['filter_manufacturer','filter_deep_sec','filter_apex','filter_rad_conn','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Биметаллические радиаторы', $vars, $desc, '/public/media/uploads/Bimetall0.jpg', '/catalog/Bimetallicheskie_radiatori');
	}
	// Категория: Чугунные Радиаторы
	public function Chugunnie_radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Чугунные радиаторы',
			'data_title'=>'Chugunnie_radiatori',
			'filter_data' => [
				'Производитель' => [
						'Viadrus',
					],
					'Страна Производителя' => [
						'Турция',' Чехия'
					],
				],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Чугунные радиаторы', $vars, $desc, '/public/media/uploads/chugunnye-radiatory0.jpg', '/catalog/Chugunnie_radiatori');
	}
	// Категория: Электрические Радиаторы
	public function Elektricheskie_radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Электрические радиаторы ⚡',
			'data_title'=>'Elektricheskie_radiatori',
			'filter_data' => [
				'Производитель' => [
					'Sun Wind'
				],
				'Страна Производителя' => [
					'Украина',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Электрические радиаторы ⚡', $vars, $desc, '/public/media/uploads/elektricheskie-radiatory0.jpg', '/catalog/Elektricheskie_radiatori');
	}
	// Категория: Дизайнерские Радиаторы
	public function Dizaynerskie_radiatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Дизайнерские радиаторы',
			'data_title'=>'Dizaynerskie_radiatori',
			'filter_data' => [
				'Производитель' => [
					'Korado',
				],
			],
			'filter_headers' => ['filter_manufacturer',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Дизайнерские радиаторы', $vars, $desc, '/public/media/uploads/Dizayn_radiator0.jpg', '/catalog/Dizaynerskie_radiatori');
	}
	// Категория: Комплектующие Для Радиаторов
	public function Komplektuyushtie_dlya_radiatorov($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Комплектующие для радиаторов',
			'data_title'=>'Komplektuyushtie_dlya_radiatorov',
			'filter_data' => [
				'Производитель' => [
					'Fado','Global','Royal Thermo'
				],
			],
			'filter_headers' => ['filter_manufacturer',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Комплектующие для радиаторов', $vars, $desc, '/public/media/uploads/komplektujuschie-dlja-radiatorov0.jpg', '/catalog/Komplektuyushtie_dlya_radiatorov');
	}

	// Категория: Электрический Теплый Пол
	public function Elektricheskiy_tepliy_pol($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Электрический теплый пол ♨️',
			'data_title'=>'Elektricheskiy_tepliy_pol',
			'filter_data' => [
				'Производитель' => [
					'Devi', 'Nexans', 'Fenix', 'In-Therm','Hemstedt','Eberle','Terneo','Arnold-Rak',
				],
				'Назначение' => [
					'Под плитку','Под стяжку','Под ламинат, линолеум','Для наружного обогрева',
				],
				'Вид Теплого Пола' => [
					'Мат нагревательный','Двужильный кабель','Одножильный кабель',
					'Инфракрасная пленка','Алюминиевый мат','Терморегуляторы'
				],
				'Площадь обогрева, м2' => [
					 '0,3 - 3,0','3,1 - 6,0', '6,1 - 9,0', '9,1 - 12,0','более 12,0',
				],
				'Общая мощность, Вт' => [
					'0 - 500','510 - 1000','1010 - 2000','2010 - 3000', 'более 3000'
				],
				'Страна Производителя' => [
					'Германия', 'Дания', 'Китай','Корея', 'Украина', 'Франция','Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_heatingfloor_worksub',
					'filter_flour_type','filter_flour_isqr','filter_heatingfloor_power',
					'filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Электрический теплый пол ♨️', $vars, $desc, '/public/media/uploads/elektricheskij-teplyj-pol0.png', '/catalog/Elektricheskiy_tepliy_pol');
	}
	// Категория: Труба Для Теплого Пола
	public function Truba_dlya_teplogo_pola($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Труба для теплого пола',
			'data_title'=>'Truba_dlya_teplogo_pola',
			'filter_data' => [
				'Производитель' => [
					'Djoul','Fado','Giacomini','Icma','Kermi','KAN-therm','RBM','Rehau','TECE','VALTEC',
				],
				'Диаметр Трубы, мм' => [
					'10','14','16','17','20',
				],
				'Страна Производителя' => [
					'Германия', 'Турция','Украина','Италия','Польша',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_pipe_rad','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Труба для теплого пола', $vars, $desc, '/public/media/uploads/truby-dlja-teplogo-pola0.png', '/catalog/Truba_dlya_teplogo_pola');
	}
	// Категория: Инфракрасный Теплый Пол
	public function Infrakrasniy_Tepliy_Pol($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Инфракрасный Теплый Пол',
			'data_title'=>'Infrakrasniy_Tepliy_Pol',
			'filter_data' => [
				'Производитель' => [
					'Danfoss','Djoul','Fado','Giacomini','Icma','Kermi','Rehau','TECE',
					'VALTEC','Watts',
				],
				'Площадь Укладки' => [
					'0,5','1','2','3','4','5',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_country','filter_flour_isqr'],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Инфракрасный Теплый Пол', $vars, $desc, '/public/media/uploads/50.jpg', '/catalog/Infrakrasniy_Tepliy_Pol');
	}
	// Категория: Водяной Теплый Пол
	public function Vodyanoy_tepliy_pol($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Водяной теплый пол ♨️',
			'data_title'=>'Vodyanoy_tepliy_pol',
			'filter_data' => [
				'Производитель' => [
					'Danfoss','Djoul','Fado','Giacomini','Icma','Kermi','Rehau','TECE','Tubex',
					'VALTEC','Watts',
				],
				'Тип Изделия ТП' => [
					'Труба для теплого пола','Коллекторная группа','Маты и плиты для пола',
					'Смесительный узел','Автоматика','Шкафы','Термоголовка с датчиком',
					'Добавки в бетон','Демпферная лента','Крепежи','Комплектующие',
				],
				'Страна Производителя' => [
					'Германия', 'Дания', 'Польша', 'Чехия', 'Турция', 'Италия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_ttype','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Водяной теплый пол ♨️', $vars, $desc, '/public/media/uploads/teplyi-pol-vodyanoi0.png', '/catalog/Vodyanoy_tepliy_pol');
	}
	// Категория: Коллекторы теплого пола
	public function Kollektori_teplogo_pola($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Коллекторы теплого пола',
			'data_title'=>'Kollektori_teplogo_pola',
			'filter_data' => [
				'Производитель' => [
					'DJOUL','FADO','GROSS','Giacomini','HERZ','ICMA','Danfoss','Kermi','Rehau','TECE',
					'Valtec',
				],
				'Насос' => [
					'Есть', 'Нет',
				],
				'Количество контуров' => [
					'2', '3', '4','5', '6','7','8','9','10','11','12',
				],
				'Страна Производителя' => [
					'Германия', 'Италия', 'Польша','Турция', 'Австрия','Испания',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_nasos', 'filter_contur_count',
					'filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Коллекторы теплого пола', $vars, $desc, '/public/media/uploads/Kolektor0.png', '/catalog/Kollektori_teplogo_pola');
	}
	// Категория: Коллекторные Шкафы
	public function Kollektornie_shkafi($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Коллекторные шкафы',
			'data_title'=>'Kollektornie_shkafi',
			'filter_data' => [
				'Производитель' => [
					'Djoul','Kermi','Gorgiel',
				],
				'Тип' => [
					'Встраиваемый','Наружный'
				],
				'Количество контуров' => [
					'2 - 4', '5 - 7', '8 - 10','Свыше 10',
				],
				'Страна Производителя' => [
					'Германия', 'Польша','Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_stype','filter_contur_count', 'filter_country'],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Коллекторные шкафы', $vars, $desc, '/public/media/uploads/170.jpg', '/catalog/Kollektornie_shkafi');
	}

	// Категория: Электрические Полотенцесушители
	public function Elektricheskie_polotentsesushiteli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Электрические полотенцесушители',
			'data_title'=>'Elektricheskie_polotentsesushiteli',
			'filter_data' => [
				'Производитель' => [
					'ELNA','Mario'
				],
				'Тип Полотенцесушителя' => [
					'Водяные','Электрические'
				],
				'Форма Полотенцесушителя' => [
					'Змеевик','Лесенка','Поворотный'
				],
				'Подключение' => [
					'Нижнее','Боковое'
				],
				'Цвет Полотенцесушителя' => [
					'Белый','Сталь','Хром'
				],
				'Страна Производителя' => [
					'Италия', 'Украина'
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_tdryer_type','filter_tdryer_form',
				'filter_tdryer_connect','filter_tdryer_colour','filter_country'],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		// $desc = ' купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Электрические полотенцесушители', $vars, $desc, '/public/media/uploads/Электрический0.png', '/catalog/Elektricheskie_polotentsesushiteli');
	}
	// Категория: Конвекторы электрические
	public function Konvektori_elektricheskie($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Конвекторы электрические',
			'data_title'=>'Konvektori_elektricheskie',
			'filter_data' => [
				'Производитель' => [
					'Atlantic','Bonjour', 'Electrolux', 'Cooper & Hunter', 'Gorenje',
				],
				'Мощность обогревателя' => [
					'до 0,5 кВт', '0,5 - 0,9 кВт', '1 - 1,5 кВт', '1,5 - 2 кВт', 'свыше 2 кВт',
				],
				'Площадь обогрева' => [
					'до 5 м2', '6 - 10 м2','до 10 м2','11 - 15 м2','до 15 м2', '16 - 20 м2',
					'до 20 м2','21 - 25 м2', 'до 25 м2','26 - 30 м2','свыше 30 м2',
				],
				'Управление' => [
					'Механическое','Сенсорное','Электронное',
				],
				'Страна Производителя' => [
					'Болгария', 'Китай', 'Украина','Словения','Швеция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_epower','filter_csquare',
					'filter_controller','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Конвекторы электрические', $vars, $desc, '/public/media/uploads/elektricheskiye-konvektory0.jpg', '/catalog/Konvektori_elektricheskie');
	}

	// Категория: ППР Трубы и Фитинги
	public function PPR_trubi_i_fitingi($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'PPR трубы и фитинги',
			'data_title'=>'PPR_trubi_i_fitingi',
			'filter_data' => [
				'Производитель' => [
					'Ekoplastik','Fado','VALTEC',
				],
				'Тип Изделия' => [
					'Трубы','Фитинги','Крепления'
				],
				'Тип Фитинга' => [
					'Заглушка','Муфта соеденительная','Муфта редукционная','Муфта с внутренней резьбой',
					'Муфта с наружной резьбой','Муфта с накидной гайкой','Угол соеденительный',
					'Угол с внутренней резьбой','Угол с наружной резьбой','Угол установочный',
					'Тройник равнопроходной','Тройник редукционный','Тройник с внутренней резьбой',
					'Тройник с наружной резьбой','Тройник двойной','Кран, вентиль','Планка монтажная','Коллектор',
				],
				'Страна Производителя' => [
					'Италия', 'Чехия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_ppr_type','filter_fitting_type','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - PPR трубы и фитинги', $vars, $desc, '/public/media/uploads/180.jpg', '/catalog/PPR_trubi_i_fitingi');
	}

	// Категория: Обжимные Фитинги
	public function Obzhimnie_fitingi($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Обжимные фитинги',
			'data_title'=>'Obzhimnie_fitingi',
			'filter_data' => [
				'Производитель' => [
					'Fado',
				],
				'Диаметр Трубы, мм' => [
					'16','20','26','32',
				],
				'Тип Изделия' => [
					'Трубы','Фитинги',
				],
				'Тип Фитинга' => [
					'Муфта соеденительная','Муфта с внутренней резьбой','Муфта с наружной резьбой',
					'Угол соеденительный','Угол с внутренней резьбой','Угол с наружной резьбой',
					'Угол установочный','Тройник равнопроходной','Тройник с внутренней резьбой',
					'Тройник с наружной резьбой',
				],
				'Страна Производителя' => [
					'Италия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_pipe_rad','filter_ppr_type',
					'filter_fitting_type','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Обжимные фитинги', $vars, $desc, '/public/media/uploads/190.jpg', '/catalog/Obzhimnie_fitingi');
	}
	// Категория: Изоляция для Труб
	public function Izolyatsiya_dlya_trub($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Изоляция для труб',
			'data_title'=>'Izolyatsiya_dlya_trub',
			'filter_data' => [
				'Производитель' => [
					'Tubex','K-FLEX',
				],
				'Толщина стенки, мм' => [
					'6','9','10','13','15',
				],
				'Диаметр, мм' => [
					'6','8','10','12','15','16','18','22','28','35','42','52','54','60',
					'65','76','89','102','114','160',
				],
				'Страна Производителя' => [
					'Украина','Чехия','Германия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_wallwd','filter_pipe_rad',
					'filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Изоляция для труб', $vars, $desc, '/public/media/uploads/201.jpg', '/catalog/Izolyatsiya_dlya_trub');
	}
	// Категория: Металопластиковые Трубы
	public function Metaloplastikovie_Trubi($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Металлопластиковые трубы',
			'data_title'=>'Metaloplastikovie_Trubi',
			'filter_data' => [
				'Производитель' => [
					'Fado','Valsir','VALTEC','Kermi','Rehau',
				],
				'Диаметр, мм' => [
					'16','20','25','26','32','40',
				],
				'Страна Производителя' => [
					'Италия','Германия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_pipe_rad','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Металлопластиковые трубы', $vars, $desc, '/public/media/uploads/210.jpg', '/catalog/Metaloplastikovie_Trubi');
	}
	// Категория: Гидроаккумуляторы
	public function Gidroakkumulyatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Гидроаккумуляторы',
			'data_title'=>'Gidroakkumulyatori',
			'filter_data' => [
				'Производитель' => [
					'Aquasystem','Reflex',
				],
				'Обьем, л' => [
					'1-10', '11-20', '21-30', '31-50', '51-80', '81-100', '101-150', '151-200',
					 '201-300', '301-400', '401-50', '501-700', '701-1000', '1001-2000', '2001-5000',
				],
				'Способ установки' => [
					'Вертикальный', 'Горизонтальный',
				],
				'Страна Производителя' => [
					'Германия', 'Италия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_bsqrt', 'filter_bset', 'filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Гидроаккумуляторы', $vars, $desc, '/public/media/uploads/gidro0.jpg', '/catalog/Gidroakkumulyatori');
	}
	// Категория: Внутрення Канализация
	public function Vnutrennyaya_kanalizatsiya($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Внутренняя канализация',
			'data_title'=>'Vnutrennyaya_kanalizatsiya',
			'filter_data' => [
				'Производитель' => [
					'Aquer','Ostendorf','Armakan'
				],
				'Тип Фитинга Канализации' => [
					'Труба','Заглушка','Муфта','Колено','Тройник','Редукция','Ревизия',
					'Компенсатор','Крестовина','Адаптер чугун-пластик','Колено Универсальное',
					'Колено WC','Трап Сточный','Хомут Крепежный','Силикон',
				],
				'Страна Производителя' => [
					'Германия','Польша','Турция'
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_stockfit_type','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Внутренняя канализация', $vars, $desc, '/public/media/uploads/220.jpg', '/catalog/Vnutrennyaya_kanalizatsiya');
	}
	// Категория: Наружная Канализация
	public function Naruzhnaya_kanalizatsiya($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Наружная канализация',
			'data_title'=>'Naruzhnaya_kanalizatsiya',
			'filter_data' => [
				'Производитель' => [
					'Ostendorf'
				],
				'Тип Фитинга Канализации' => [
					'Труба','Муфта','Колено','Тройник','Редукция','Ревизия',
				],
				'Диаметр Канализации' => [
					'110мм','160мм','200мм','250мм','315мм','400мм','500мм'
				],
				'Страна Производителя' => [
					'Германия','Румыния'
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_stockfit_type',
				'filter_stock_rad','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Наружная канализация', $vars, $desc, '/public/media/uploads/230.jpg', '/catalog/Naruzhnaya_kanalizatsiya');
	}
	// Категория: Бесшумная Канализация
	public function Besshumnaya_kanalizatsiya($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Бесшумная канализация',
			'data_title'=>'Besshumnaya_kanalizatsiya',
			'filter_data' => [
				'Производитель' => [
					'Ostendorf','Rehau'
				],
				'Тип Фитинга Канализации' => [
					'Труба','Заглушка','Муфта','Колено','Тройник','Редукция','Ревизия',
					'Компенсатор','Крестовина','Колено WC','Манжет',
				],
				'Страна Производителя' => [
					'Германия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Бесшумная канализация', $vars, $desc, '/public/media/uploads/240.jpg', '/catalog/Besshumnaya_kanalizatsiya');
	}
	// Категория: Грязевики и шламоуловители
	public function Gryazeviki_i_shlamouloviteli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Грязевики и шламоуловители',
			'data_title'=>'Gryazeviki_i_shlamouloviteli',
			'filter_data' => [
				'Производитель' => [
					'Honeywell','Atlas Filtri', 'HERZ', 'Fado', 'Valtec', 'FAR', 'AFRISO', 'TIEMME',
				],
				'Назначение' => [
					'Холодная вода', 'Горячая вода',
				],
				'Рабочая среда' => [
					'Вода', 'Газ',
				],
				'Диаметр подключения' => [
					'1/4', '1/2', '3/8', '3/4', '1',
					'1 1/4', '1 1/2', '2', '2 1/4', '2 1/2',
				],
				'Страна Производителя' => [
					'Германия', 'Италия', 'Китай'
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_dest','filter_worksub',
					'filter_diametr','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Грязевики и шламоуловители', $vars, $desc, '/public/media/uploads/Filtr0.jpg', '/catalog/Gryazeviki_i_shlamouloviteli');
	}
	// Категория: Воздухоотводчики
	public function Vozduhootvodchiki($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Воздухоотводчики',
			'data_title'=>'Vozduhootvodchiki',
			'filter_data' => [
				'Производитель' => [
					'AFRISO','Giacomini','TIEMME','Honeywell','Watts','Herz',
				],
				'Диаметр подсоединения(дюймы)' => [
					'1/2','3/8','3/4',
				],
				'Максимальное рабочее давное(бар)' => [
					'10','12','14',
				],
				'Страна Производителя' => [
					'Германия','Италия','Польша',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_diametr','filter_pressure',
				'filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Воздухоотводчики', $vars, $desc, '/public/media/uploads/R88IY0030.jpg', '/catalog/Vozduhootvodchiki');
	}
	// Категория: Радиаторная запорная арматура
	public function Radiatornaya_zapornaya_armatura($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Радиаторная запорная арматура',
			'data_title'=>'Radiatornaya_zapornaya_armatura',
			'filter_data' => [
				'Производитель' => [
					'Giacomini','Herz','Heimeier','Danfoss','FADO','Kermi','Oventrop',
				],
				'Диаметр подключения(дюймы)' => [
					'1/2','3/4','М 30 х 1,5',
				],
				'Вид крана' => [
					'Прямой','Угловой','Термоголовка',
				],
				'Принадлежность подключения' => [
					'Боковое','Нижнее',
				],
				'Наличие термоголовки' => [
					'Есть','Нет',
				],
				'Страна Производителя' => [
					'Германия','Италия','Турция','Дания','Китай',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_diametr','filter_crantype',
				'filter_rad_conn','filter_extbarrel','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Радиаторная запорная арматура', $vars, $desc, '/public/media/uploads/Zaporno_regyl_armatura0.jpg', '/catalog/Radiatornaya_zapornaya_armatura');
	}
	// Категория: Группы безопасности
	public function Gruppi_bezopasnosti($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Группы безопасности',
			'data_title'=>'Gruppi_bezopasnosti',
			'filter_data' => [
				'Производитель' => [
					'AFRISO','TIEMME','Honeywell','Watts','Meibes','Herz','FADO',
				],
				'Диаметр подключения(дюймы)' => [
					'1/2','3/4','1','1 1/4','1 1/2',
				],
				'Применяются для' => [
					'Бойлеров','Котлов',
				],
				'Страна Производителя' => [
					'Германия','Италия','Турция','Дания','Китай',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_diametr','filter_usefor',
				'filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Группы безопасности', $vars, $desc, '/public/media/uploads/Gruppa_bezopasnosti0.jpg', '/catalog/Gruppi_bezopasnosti');
	}
	// Категория: Редукторы давления
	public function Reduktori_davleniya($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Редукторы давления',
			'data_title'=>'Reduktori_davleniya',
			'filter_data' => [
				'Производитель' => [
					'AFRISO','TIEMME','F.A.R.G.','Honeywell','Watts','Meibes','Herz','FADO',
				],
				'Диаметр подключения(дюймы)' => [
					'1/2','3/4','1','1 1/4','1 1/2','2',
				],
				'Назначение' => [
					'Холодная вода','Горячая вода','Холодная + Горячая вода',
				],
				'Шкала установки давления' => [
					'Есть','Нет',
				],
				'Страна Производителя' => [
					'Германия','Италия','Турция','Дания','Китай',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_diametr','filter_dest',
				'filter_extbarrel','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Редукторы давления', $vars, $desc, '/public/media/uploads/reduktor_vodi0.jpg', '/catalog/Reduktori_davleniya');
	}
	// Категория: Инсталляции
	public function Installyatsii($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Инсталляции',
			'data_title'=>'Installyatsii',
			'filter_data' => [
				'Производитель' => [
					'Geberit','Grohe','IMPRESE','Roca','TECE','VIEGA','VILLEROY & BOCH',
				],
				'Тип инсталляции' => [
					'Инсталляция','Комплект','Комплектующие для инсталляций'
				],
				'Назначение инсталляции' => [
					'Для унитаза','Для биде','Для раковины','Для писсуара',
				],
				'Страна Производителя' => [
					'Германия','Испания','Чехия','Швейцария','Португалия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_instaltype','filter_instaldest',
				'filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Инсталляции', $vars, $desc, '/public/media/uploads/grohe0.png', '/catalog/Installyatsii');
	}
	// Категория: Кандиционеры Настенного Типа
	public function Konditsioneri_nastennogo_tipa($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Кондиционеры настенного типа',
			'data_title'=>'Konditsioneri_nastennogo_tipa',
			'filter_data' => [
				'Производитель' => [
					'CHIGO','Cooper&hunter','DAIKIN','DEKKER','EWT','General','GREE','IDEA','LG','LUBERG',
					'Midea','MDV','Mitsubishi Electric','Mitsubishi HEAVY','NEOCLIMA','OLMO','OSAKA',
					'Panasonic','Samsung','TOSHIBA','TOSOT','Sensei',
				],
				'Обогрев Зимой' => [
					'-5°С', '-7°С', '-10°С', '-15°С', '-20°С','-22°С', '-23°С','-25°С','-30°С',
				],
				'Инверторная Технология' => [
					'Нет','Да'
				],
				'Мощность, БТЕ/час' => [
					'05','07','09','12','18','24','28','30','36',
				],
				'Площадь охлаждения, м2' => [
					'до 15 м2','до 20 м2','до 25 м2', 'до 30 м2', 'до 35 м2', 'до 40 м2', 'до 50 м2', 'до 60 м2','до 70 м2','до 80 м2','до 90 м2',
					'до 100 м2','до 120 м2',
				],
				'Тип хладагента:' => [
					'R-32','R-410a','R-410',
				],
				'Страна Производителя' => [
					'Италия', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция','Гонконг','Япония',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_wheating','filter_invert',
					'filter_bpower','filter_csquare','filter_ctype','filter_country'],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Кондиционеры настенного типа', $vars, $desc, '/public/media/uploads/cooperandhunter0.jpg', '/catalog/Konditsioneri_nastennogo_tipa');
	}
	// Категория: Мобильные Кондиционеры
	public function Mobilynie_konditsioneri($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Мобильные кондиционеры',
			'data_title'=>'Mobilynie_konditsioneri',
			'filter_data' => [
				'Производитель' => [
					'BALLU','CHIGO','Cooper&hunter','ELECTROLUX','NEOCLIMA','OLMO',
				],
				'Мощность, БТЕ/час' => [
					'07','09','10','11','12','13','15',
				],
				'Площадь охлаждения, м2' => [
					'до 15 м2','до 20 м2','до 30 м2','30 м2','до 35 м2','35 м2','до 40 м2','40 м2',
					'до 60 м2','до 80 м2','до 100 м2','до 120 м2',
				],
				'Тип хладагента:' => [
					'R-32','R-410a','R-410'
				],
				'Страна Производителя' => [
					'Китай','Гонконг',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_bpower','filter_csquare',
				'filter_ctype','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Мобильные кондиционеры', $vars, $desc, '/public/media/uploads/cooperandhunter-ch-m09k6s01.jpg', '/catalog/Mobilynie_konditsioneri');
	}
	// Категория: Увлажнители Воздуха
	public function Uvlazhniteli_vozduha($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Увлажнители воздуха',
			'data_title'=>'Uvlazhniteli_vozduha',
			'filter_data' => [
				'Производитель' => [
					'BONECO',
				],
				'Площадь Увлажнения, м2' => [
					'до 40 м2',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_csquare','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Увлажнители воздуха', $vars, $desc, '/public/media/uploads/50.jpg', '/catalog/Tverdotoplivnie_kotli');
	}
	// Категория: Циркулярные Насосы
	public function Tsirkulyatsionnie_nasosi($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Циркуляционные насосы',
			'data_title'=>'Tsirkulyatsionnie_nasosi',
			'filter_data' => [
				'Производитель' => [
					'Grundfos','Wilo'
				],
				'Напор, м' => [
					'2 - 3 м','3 - 4 м','4 - 5 м','6 - 8 м','8 - 12 м',
				],
				'Производтельность, мЗ/час' => [
					'2 - 4 м3/час','4 - 5 м3/час','5 - 6 м3/час','6 - 8 м3/час',
					'8 - 10 м3/час','10 - 12 м3/час',
				],
				'Монтажная Длина, мм' => [
					'130мм','180мм',
				],
				'Потребляемая Мощность, Вт' => [
					'20 - 40 Вт','40 - 60 Вт','60 - 80 Вт','80 - 100 Вт','100 - 120 Вт','120 - 150 Вт',
					'150 - 200 Вт','200 - 250 Вт',
				],
				'Электропитания, В' => [
					'220','380',
				],
				'Страна Производителя' => [
					'Германия','Дания',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_napor','filter_effect',
					'filter_mlength','filter_nepower','filter_napryajenie','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Циркуляционные насосы', $vars, $desc, '/public/media/uploads/270.jpg', '/catalog/Tsirkulyatsionnie_nasosi');
	}
	// Категория: Бойлеры Электрические
	public function Boyleri_elektricheskie($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Бойлеры электрические',
			'data_title'=>'Boyleri_elektricheskie',
			'filter_data' => [
				'Производитель' => [
					'ARTI','Ariston','Atlantic','Bosch','Drazice','Eldom','TESY',
				],
				'Форма Бойлера' => [
					'Цилиндрический','Прямоугольный','Slim (тонкий)','Плоский','Компактный',
				],
				'Установка Бойлера' => [
					'Под мойку', 'Над мойкой', 'Настенный', 'Настенный вертикальный',
					'Настенный горизонтальный', 'Вертикальный/Горизонтальный','Напольный',
				],
				'Тип Нагревательного Тэна' => [
					'Сухой', 'Мокрый',
				],
				'Объем Бойлера' => [
					'5 - 10', '11 - 15', '16 - 30', '31 - 50', '51 - 60', '61 - 80','81 - 100','101 - 120',
					'121 - 150','151 - 200','201 - 250','251 - 300','300','400','500',
					'750','800','1000','2000',
				],
				'Страна Производителя' => [
					'Болгария','Италия', 'Франция', 'Китай', 'Корея', 'Польша', 'Словакия', 'Турция',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_bform','filter_bset',
				'filter_tentype','filter_bsqrt','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Бойлеры электрические', $vars, $desc, '/public/media/uploads/280.jpg', '/catalog/Boyleri_elektricheskie');
	}
	// Категория: Проточные Электрические Водонагреватели
	public function Protochnie_elektricheskie_vodonagrevateli($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Проточные электрические водонагреватели',
			'data_title'=>'Protochnie_elektricheskie_vodonagrevateli',
			'filter_data' => [
				'Производитель' => [
					'Atlantic','Bosch','CLAGE','Kospel','TESY','Thermex','Vaillant'
				],
				'Подключение' => [
					'Над мойкой','Под мойкой',
				],
				'Электрическая мощность, кВт' => [
					'3','3,5','4','4,5','5','5,5','6','6,5','7','8 - 10','10,5','11 - 13',
					'14-20','21','24',
				],
				'Производительность, л/мин' => [
					'1,8','2,0','2,5','3','4','5','7','9,8','11,5','13,1',
				],

				'Страна Производителя' => [
					'Польша','Украина', 'Германия', 'Португалия', 'Болгария', 'Китай', 'Франция', 'Словакия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_rad_conn','filter_epower_int',
				'filter_effect_lmin','filter_country'],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Проточные электрические водонагреватели', $vars, $desc, '/public/media/uploads/290.jpg', '/catalog/Protochnie_elektricheskie_vodonagrevateli');
	}
	// Категория: Газовые Колонки
	public function Gazovie_kolonki($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Газовые колонки',
			'data_title'=>'Gazovie_kolonki',
			'filter_data' => [
				'Производитель' => [
					'Ariston','Atlantic','Bosch','Demrad','ELECTROLUX',
				],
				'Обьем горячей воды, л/мин' => [
					'7', '10','11','12','13','14', '15','17','18','27',
				],
				'Мощность, кВт' => [
					'14', '16','17', '18','19','20','21','22', '23','24', '26','28','30','47',
				],
				'Тип камеры сгорания' => [
					'Открытая', 'Закрытая',
				],
				'Тип розжига' => [
					'Электро', 'Пьезо','Батарейки','Турбинка',
				],
				'Страна Производителя' => [
					'Германия', 'Китай', 'Франция', 'Украина','Португалия','Турция','Италия',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_wsqrt','filter_epower_int',
				'filter_burn_cam_type','filter_rozjig','filter_country',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Газовые колонки', $vars, $desc, '/public/media/uploads/301.jpg', '/catalog/Gazovie_kolonki');
	}
	// Категория: Программаторы
	public function Programmatori($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Программаторы',
			'data_title'=>'Programmatori',
			'filter_data' => [
				'Производитель' => [
					'Computherm','Auraton','Salus',
				],
				'Тип Программатора' => [
					'Проводной','Беспроводной','с Wi-Fi',
				],
				'Страна Производителя' => [
					'Венгрия', 'Германия', 'Китай',
				],
			],
			'filter_headers' => ['filter_manufacturer','filter_ptype', 'filter_country'],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Программаторы', $vars, $desc, '/public/media/uploads/340.jpeg', '/catalog/Programmatori');
	}
	// Категория: Стабилизаторы Напряжения
	public function Stabilizatori_napryazheniya($category, $sorted = []){
		if(empty($sorted)){
			$products = $this->model->getProducts($category);
		}else{
			$products = $sorted;
		}
		$vars = [
			'title_page' =>'Стабилизаторы напряжения',
			'data_title'=>'Stabilizatori_napryazheniya',
			'filter_data' => [
				'Производитель' => [
					'LVT',
				],
			],
			'filter_headers' => ['filter_manufacturer',],
			'product_list' => $products,
		];
		$vars['title'] = ''.$vars['title_page'].'. Купить по лучшей цене в Украине.';
		$desc = $vars['title_page'].'. Купить в интернет-магазине Ultraprom.com.ua. ☎: (098) 037-77-11, (050) 881-04-49. Доставка, монтаж, сервис, гарантия, качество.';
		$this->view->render('Каталог - Стабилизаторы напряжения', $vars, $desc, '/public/media/uploads/360.jpeg', '/catalog/Stabilizatori_napryazheniya');
	}

}


?>
