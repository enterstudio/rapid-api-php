<?php

require_once '../vendor/autoload.php';
require_once '../src/Rapid/Rapid.php';
require_once '../src/Rapid/Response.php';

use Rapid\Rapid;

Rapid::init("c09488fe9421b97eff3cbfeaa553db8f034777bb");


//LOGOUT
echo "<h3>LOGOUT Example</h3>";
$response = Rapid::logout();
print_r($response);


