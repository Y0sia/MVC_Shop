<?php


namespace app\controllers;

use shop\App;
use \RedBeanPHP\R as R;
use shop\Cache;

class MainController extends AppController
{
    public function indexAction() {
    	$brands = R::find('brand', 'LIMIT 3');
    	$hits = R::find('product', "status = '1' AND hit = '1' LIMIT 8");
        $this->setMeta("Главная страница", "Описание..", "Ключи..");
		$this->set(compact('brands', 'hits'));
    }
}