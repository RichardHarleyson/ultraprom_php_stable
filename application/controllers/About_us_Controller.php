<?php

namespace application\controllers;

use application\core\Controller;

class About_us_Controller extends Controller{

	public function mainAction(){
		$desc = 'Монтаж инженерный сетей и коммуникаций. Магазин отопительной техники. ☎: (098) 037-77-11, (050) 881-04-49. Монтаж, сервис, гарантия, качество.';
		$vars = [];
		$this->view->render('Автономное отопление Днепр/Монтаж инженерных сетей - "Ультрапром"', $vars, $desc);
	}
}


?>
