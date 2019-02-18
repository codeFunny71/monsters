<?php
/**
 * Created by PhpStorm.
 * User: marcusabsher
 * Date: 2019-02-06
 * Time: 11:23
 */

require_once 'vendor/autoload.php';


$f3 = Base::instance();


$f3->route('GET /',
    function($f3) {
        $monster = new Monster('bob');
        $vampire = new Vampire('tom');
        $swampy = new Swampthing('fred');
        $swampy->setSmell('Really bad smell');

        echo $monster->attack();
        echo $vampire->attack();
        echo $swampy->attack();
        echo $swampy->getSmell();

        $template = new Template();
        echo $template->render('views/home.html');
    }
);
$f3->run();