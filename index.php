<?php

//This is my CONTROLLER
/** Create a food order form */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require the autoload file
require_once('vendor/autoload.php');

//Create an instance of Base class
$f3 = Base::instance();
$f3->set('DEBUG', 3);

//define a default route(home page)
$f3->route('GET /', function() {
    //echo "Hello";
    $view = new Template();
    echo $view->render('views/home.html');
});

//define an order route
$f3->route('GET /order', function () {
    echo "Tester";
    //$view = new Template();
    //echo $view->render('views/order.html');
});

//define an order 2  route
$f3->route('GET /order2', function () {
    echo "Tester";
    //$view = new Template();
    //echo $view->render('views/order2.html');
});

//define a summary  route
$f3->route('GET /summary', function () {
    echo "Tester";
    //$view = new Template();
    //echo $view->render('views/summary.html');
});

//run fat free
$f3->run();