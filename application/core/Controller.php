<?php

namespace application\core;

use application\core\View;

abstract class Controller
{
	public $route;
	public $view;
	public $acl;

	public function __construct($route)
	{
		$this->route = $route;
		// Проверка прав доступа
		// $_SESSION['admin'] = 1;
		// debug($this->checkAcl());
		if($this->checkAcl() == false){
			echo 'Access Denied<br>';
			View::errorCode(403);
		}
		$this->view = new View($route);
		$this->model = $this->loadModel($route['controller']);
		// Для использования кастомных стилей
		// $this->before();
	}

	public function loadModel($name){
		$path = 'application\models\\'.ucfirst($name);
		// debug($path);
		if(class_exists($path)){
			return new $path;
		}else{
			'No model <b>'.$name.'</b> found';
		}
	}

	public function checkAcl(){
		$this->acl = require 'application/config/access.php';
		if ($this->isAcl('all')){
			return true;
		}elseif (isset($_SESSION['admin']) and $this->isAcl('admin')){
			return true;
		}
		return false;
	}

	public function isAcl($key){
		return in_array($this->route['action'], $this->acl[$key]);
	}

	public function translit($string){
		$cyr  = array('а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у',
		            'ф','х','ц','ч','ш','щ','ъ', 'ы','ь', 'э', 'ю','я','А','Б','В','Г','Д','Е','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У',
		            'Ф','Х','Ц','Ч','Ш','Щ','Э', 'Ю','Я');
		$lat = array( 'a','b','v','g','d','e','io','zh','z','i','y','k','l','m','n','o','p','r','s','t','u',
		            'f' ,'h' ,'ts' ,'ch','sh' ,'sht' ,'a', 'i', 'y', 'e' ,'yu' ,'ya','A','B','V','G','D','E','Zh',
		            'Z','I','Y','K','L','M','N','O','P','R','S','T','U',
		            'F' ,'H' ,'Ts' ,'Ch','Sh' ,'Sht','E' ,'Yu' ,'Ya');
		// str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] ) : mixed
		// Эта функция возвращает строку или массив, в котором все вхождения search в subject заменены на replace.
		// $textcyr = str_replace($cyr, $lat, $textcyr);
		// $textlat = str_replace($lat, $cyr, $textlat);
		$string = str_replace($cyr, $lat, $string);
		$string = str_replace(" ", "_", $string);
		$string = str_replace("-", "_", $string);
		$string = str_replace("(", "", $string);
		$string = str_replace(")", "", $string);
		$string = str_replace(".", "_", $string);
		$string = str_replace("/", "_", $string);
		$string = str_replace("|", "_", $string);
		$string = str_replace("\"", "_", $string);
		$string = str_replace("'", "_", $string);
		$string = str_replace("“", "_", $string);
		$string = str_replace("”", "_", $string);
		$string = str_replace("+ ", "_", $string);
		$string = str_replace("+", "_", $string);
		$string = str_replace(",", "_", $string);
		$string = str_replace("[", "_", $string);
		$string = str_replace("]", "_", $string);
		$string = str_replace("{", "_", $string);
		$string = str_replace("}", "_", $string);
		$string = str_replace("&", "_", $string);
		$string = str_replace("*", "_", $string);
		$string = str_replace("’", "_", $string);
		$string = str_replace("&nbsp;", "_", $string);
		$string = str_replace("×", "x", $string);
		$string = str_replace("%C3%97", "x", $string);
		$string = str_replace("%C2%A0", "x", $string);
		$string = str_replace("%E2%80%91", "x", $string);
		$string = str_replace("‑", "x", $string);

		return $string;
	}

	public function redirect($url){
		header('location: /'.$url);
	}

}

 ?>
