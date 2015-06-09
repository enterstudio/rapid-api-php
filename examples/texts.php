<?php

require_once '../vendor/autoload.php';
require_once '../src/Rapid/Texts.php';
require_once '../src/Rapid/Rapid.php';
require_once '../src/Rapid/Response.php';

use Rapid\Rapid;
use Rapid\Texts;

Rapid::init("c09488fe9421b97eff3cbfeaa553db8f034777bb");


////GET ALL
//echo "<h3>GET ALL Example</h3>";
//$response = Texts::getAll();
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
//    echo $response->text . "<br/>";
//    echo "<hr/>";
//}

////GET
//echo "<h3>GET Example with id te</h3>";
//$id = "te";
//$response = Texts::get($id);
//echo $response->data()->title;

//POST
echo "<h3>POST Example </h3>";
$body = [
    'title' => 'My Fourth Post',
    'text' => 'My Fourth Post',
    'slug' => 'my-fourth-post',
    'createdUserId' => Rapid::getUserId()
];
$response = Texts::post($body);
print_r($response->status());

////PUT
//echo "<h3>PUT Example</h3>";
//$id = "eE5HShXGG6cCGc3hT";
//$body = [
//    'title' => 'My Fifth Post',
//    'slug' => 'my-fifth-post'
//];
//$response = Texts::put($id, $body);
//print_r($response);

////DELETE
//echo "<h3>DELETE Example</h3>";
//$id = "eE5HShXGG6cCGc3hT";
//$response = Texts::delete($id);
//print_r($response);

////DELETE ALL
//echo "<h3>DELETE ALL Example</h3>";
//$response = Texts::deleteAll();
//print_r($response);



