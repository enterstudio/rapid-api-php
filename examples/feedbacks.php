<?php

require_once '../vendor/autoload.php';
require_once '../src/Rapid/Feedbacks.php';
require_once '../src/Rapid/Rapid.php';
require_once '../src/Rapid/Response.php';

use Rapid\Rapid;
use Rapid\Feedbacks;

Rapid::init("5b107695161b40780be8e1d3e4c17da4c8820244");

//POST
echo "<h3>POST Example </h3>";
$body = [
    'name' => 'Ega Wachid Radiegtya',
    'email' => 'radiegtya@yahoo.co.id',
    'phone' => '085641278479',
    'title' => 'Pengembangan Rapid',
    'text' => 'Apa yang akan dikembangkan dari rapid?',
];
$response = Feedbacks::post($body);
print_r($response->status());
