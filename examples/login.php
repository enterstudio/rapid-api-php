<?php

require_once '../vendor/autoload.php';
require_once '../src/api/Rapid.php';
require_once '../src/api/Response.php';

use Rapid\Api\Rapid;

Rapid::init("5b107695161b40780be8e1d3e4c17da4c8820244");

//LOGIN
echo "<h3>LOGIN Example</h3>";
$response = Rapid::login('tiyo-news-admin', 'admin');
print_r($response);

