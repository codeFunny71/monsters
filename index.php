<?php
/**
 * Created by PhpStorm.
 * User: marcusabsher
 * Date: 2019-02-06
 * Time: 11:23
 */

require 'vendor/autoload.php';
$f3 = \Base::instance();
$f3->route('GET /',
    function() {
        echo 'Hello, world!';
    }
);
$f3->run();