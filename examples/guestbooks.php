<?php

require_once '../vendor/autoload.php';
require_once '../src/Rapid/Guestbooks.php';
require_once '../src/Rapid/Rapid.php';
require_once '../src/Rapid/Response.php';

use Rapid\Rapid;
use Rapid\Guestbooks;

Rapid::init("5b107695161b40780be8e1d3e4c17da4c8820244");

//GET ALL
echo "<h3>GET ALL Example</h3>";
$response = Guestbooks::getAll();
print_r($response->headers());

echo "<br/>";

echo $response->paginate();

foreach ($response->data() as $response) {
    echo "<hr/>";
    echo $response->_id . "<br/>";
    echo $response->name . "<br/>";
    echo $response->text . "<br/>";
    echo $response->answer . "<br/>";
    echo "<hr/>";
}

////POST
//echo "<h3>POST Example </h3>";
//$body = [
//    'name' => 'Ega Wachid Radiegtya',
//    'text' => 'my-fourth-post'
//];
//$response = Guestbooks::post($body);
//print_r($response->status());

