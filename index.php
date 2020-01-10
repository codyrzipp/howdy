<?php
// turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

// require autoload file
require_once ("vendor/autoload.php");

// create an instance of base case
$f3 = Base::instance();

//define a default route
$f3 -> route('GET /', function(){
    echo "<p>Howdy!</p>";
});

//run fat free
$f3 -> run();