<?php

require_once 'vendor/autoload.php';
require_once './api/Rapid.php';
require_once './api/News.php';

use Rapid\Api\Rapid;
use Rapid\Api\News;

Rapid::init("5b107695161b40780be8e1d3e4c17da4c8820244");

//GET ALL
echo "<h3>GET ALL Example</h3>";
$response = News::getAll(['limit'=>2]);

foreach ($response->body->data as $response) {
    echo $response->_id . "<br/>";
    echo $response->title . "<br/>";
    echo "<hr/>";
}

//GET
echo "<h3>GET Example with id wY2yvKq72ErzL7h5d</h3>";
$id = "p7Tpkmq55DaBMguED";
$response = News::get($id, ["title" => "b"]);
echo $response->body->data->title;

////LOGIN
//echo "<h3>LOGIN Example</h3>";
//$response = Rapid::login('tiyo-news-admin', 'admin');
//print_r($response);

////LOGOUT
//echo "<h3>LOGOUT Example</h3>";
//$response = Rapid::logout();
//print_r($response);

//POST
echo "<h3>POST Example</h3>";
$body = [
    'title' => 'My Third Post',
    'slug' => 'my-third-post'
];
$response = News::post($body);
print_r($response);

////PUT
//echo "<h3>PUT Example</h3>";
//$id = "p7Tpkmq55DaBMguED";
//$body = [
//    'title' => 'My Third Post',
//    'slug' => 'my-third-post'
//];
//$response = News::put($id, $body);
//print_r($response);

////DELETE
//echo "<h3>DELETE Example</h3>";
//$id = "S2aFowJsW4DscaEvB";
//$response = News::delete($id);
//print_r($response);

////DELETE ALL
//echo "<h3>DELETE ALL Example</h3>";
//$response = News::deleteAll();
//print_r($response);



