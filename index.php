<?php
/**
 * Created by PhpStorm.
 * User: Pavel
 * Date: 1/11/18
 * Time: 11:20 AM
 */

//require the autoload file
require_once ('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function() {
    echo '<h1>Hello!</h1>';
    echo '<h2>How are you?</h2>';

    $view = new View;
    echo $view->render
    ('views/home.html');
}
);

//run Fat-Free
$f3->run();