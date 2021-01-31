<?php


namespace app\controllers;

use app\widgets\currency\Currency;
use RedBeanPHP\R;
use shop\App;
use shop\base\Controller;
use app\models\AppModel;
use shop\Cache;

class AppController extends Controller {

    public function __construct($route) {
        parent::__construct($route);
        new AppModel();
        $curr = Currency::getCurrencies();
        $this->setMeta('', '', 'Luxury Watches Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design');
        App::$app->setProperty('currencies', Currency::getCurrencies());
        App::$app->setProperty('currency', Currency::getCurrency(App::$app->getProperty('currencies')));
        App::$app->setProperty('cats', self::cacheCategory());
    }

    public static function cacheCategory() {
        $cache = Cache::instance();
        $cats = $cache->get('cats');
        if(!$cats) {
            $cats = R::getAssoc('SELECT * FROM category');
            $cache->set('cats', $cats);
        }
        return $cats;
    }

}