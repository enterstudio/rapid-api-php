<?php

require_once '../vendor/autoload.php';
require_once '../src/Rapid/Rapid.php';
require_once '../src/Rapid/Response.php';

use Rapid\Rapid;

Rapid::init("5b107695161b40780be8e1d3e4c17da4c8820244");


//LOGOUT
echo "<h3>LOGOUT Example</h3>";
$response = Rapid::logout();
print_r($response);


