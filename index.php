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
    function() {
        echo 'Hello, world!';
        $template = new Template();
        echo $template->render('views/home.html');
    }
);
$f3->run();