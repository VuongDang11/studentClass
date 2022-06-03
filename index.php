<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the necessary files
require_once('vendor/autoload.php');

//Start a session
session_start();

/*
//Test Order class
$order = new Order();
$order->setFood("tacos");
$order->setMeal("lunch");
$order->setCondiments("salsa, guacamole");
var_dump($order);
*/

//Test DataLayer class
$dataLayer = new DataLayer();
//$dataLayer->saveOrder(new Order('V', 'D', '1957-05-05', 3.2, 1));
//var_dump($dataLayer);

//Create an instance of the Base class
$f3 = Base::instance();

//Create an instance of the Controller class
$con = new Controller($f3);

//Define a default route
$f3->route('GET /', function() {

    $GLOBALS['con']->home();
});

//Define an admin route
$f3->route('GET /admin', function() {

    $GLOBALS['con']->admin();
});

//Define an admin route
$f3->route('GET|POST /order', function() {

    $GLOBALS['con']->order();
});

//Define an order route
$f3->route('GET|POST /student', function() {
    var_dump($_SESSION['order']);
    $GLOBALS['con']->student();
});

//Run fat-free
$f3->run();