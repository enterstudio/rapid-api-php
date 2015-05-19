<?php

require_once '../vendor/autoload.php';
require_once '../src/Rapid/MultipleFiles.php';
require_once '../src/Rapid/Rapid.php';
require_once '../src/Rapid/Response.php';

use Rapid\Rapid;
use Rapid\MultipleFiles;

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
