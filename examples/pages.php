<?php

require_once '../vendor/autoload.php';
require_once '../src/api/Pages.php';
require_once '../src/api/Rapid.php';
require_once '../src/api/Response.php';

use Rapid\Api\Rapid;
use Rapid\Api\Pages;

Rapid::init("5b107695161b40780be8e1d3e4c17da4c8820244");


////GET ALL
//echo "<h3>GET ALL Example</h3>";
//$response = Pages::getAll();
//print_r($response->headers());
//
//echo "<br/>";
//
//echo $response->paginate();
//
//foreach ($response->data() as $response) {
//    echo "<hr/>";
//    echo $response->_id . "<br/>";
//    echo $response->title . "<br/>";
//    echo $response->description . "<br/>";
//    echo "<hr/>";
//}

////GET
//echo "<h3>GET Example with id eE5HShXGG6cCGc3hT</h3>";
//$id = "joko";
//$response = Pages::get($id);
//echo $response->data()->title;

////POST
//echo "<h3>POST Example </h3>";
//$body = [
//    'title' => 'My Fourth Post',
//    'description' => 'My Fourth Post',
//    'slug' => 'my-fourth-post'
//];
//$response = Pages::post($body);
//print_r($response->body->status);

////PUT
//echo "<h3>PUT Example</h3>";
//$id = "eE5HShXGG6cCGc3hT";
//$body = [
//    'title' => 'My Fifth Post',
//    'slug' => 'my-fifth-post'
//];
//$response = Pages::put($id, $body);
//print_r($response);

//DELETE
echo "<h3>DELETE Example</h3>";
$id = "eE5HShXGG6cCGc3hT";
$response = Pages::delete($id);
print_r($response);

////DELETE ALL
//echo "<h3>DELETE ALL Example</h3>";
//$response = Pages::deleteAll();
//print_r($response);



