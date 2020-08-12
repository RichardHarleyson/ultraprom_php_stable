<?php
namespace application\core;

use application\models\Menu;

class View{
	public $path;
	public $route;
	public $layout = 'default';
	public $new_db;

	public function __construct($route){
		$this->route = $route;
		$this->path = $this->route['controller'].'/'.$this->route['action'];
	}

	public function render($title = '', $vars = [], $desc = '', $og_image ='/public/media/img/logo_compressed.jpg', $og_url='ultraprom.com.ua'){
		//Создаем корзину
		if(empty($_SESSION['cart'])){
			$_SESSION['cart'] = array();
		};
		// собираем меню
		$this->new_db = new Menu();
		$menu = array();
		$menu_category_counter = 11;
		$menu_lcategory_counter = 11;
		$global_category = $this->new_db->row('SELECT * FROM newworld_ultp.up_global_category ORDER BY id ASC');
		foreach ($global_category as $global) {
			$category = array();
			$cr = $this->new_db->row('SELECT *  FROM newworld_ultp.up_category WHERE gc_id='.$global['id'].' ORDER BY id ASC');
			foreach ($cr as $item) {
				$lcr = $this->new_db->row('SELECT * FROM newworld_ultp.up_lower_category WHERE c_id='.$item['id'].' ORDER BY id ASC');
				$item['info'] = $lcr;
				array_push($category, $item);
			}
			$global['info'] = $category;
			array_push($menu, $global);
		}
		$cart_counter = count($_SESSION['cart']);
		// debug($menu);

		$path = 'application/views/'.$this->path.'.php';
		// debug($path);
		extract($vars);
		if(file_exists($path)){
			ob_start();
			require $path;
			$content = ob_get_clean();
			require 'application/views/layouts/'.$this->layout.'.php';
		}else{
			$path = 'application/views/'.$this->path.'.xml';
			extract($vars);
			if(file_exists($path)){
				ob_start();
				require $path;
				$content = ob_get_clean();
				require 'application/views/layouts/'.$this->layout.'.php';
			}else{
				echo 'View <b>'.$path.'</b> not found';
			}
		}
	}

	public function redirect($url){
		header('location: /'.$url);
		exit;
	}

	public static function errorCode($code){
		http_response_code($code);
		$path = 'application/views/errors/'.$code.'.php';
		if(file_exists($path)){
				require $path;
		}
		exit;
	}

	public function message($status, $message){
		exit(json_encode(['status'=> $status, 'message'=> $message]));
	}

	public function location($url){
		exit(json_encode(['url'=> $url]));
	}


}

 ?>
