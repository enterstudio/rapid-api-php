<?php

require_once '../vendor/autoload.php';
require_once '../src/api/MultipleFiles.php';
require_once '../src/api/Rapid.php';
require_once '../src/api/Response.php';

use Rapid\Api\Rapid;
use Rapid\Api\MultipleFiles;

Rapid::init("5b107695161b40780be8e1d3e4c17da4c8820244");

//GET ALL BY FILE
echo "<h3>GET ALL By File Example</h3>";
$response = MultipleFiles::getAllByFile("GwnXm3GQJSnrEjYbG");
print_r($response->headers());

echo "<br/>";

echo $response->paginate();

foreach ($response->data() as $response) {
    echo "<hr/>";
    echo $response->_id . "<br/>";
    echo $response->title . "<br/>";
    echo $response->file . "<br/>";
    echo "<hr/>";
}
