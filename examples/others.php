<?php

require_once '../vendor/autoload.php';
require_once '../src/Rapid/Others.php';
require_once '../src/Rapid/Rapid.php';
require_once '../src/Rapid/Response.php';

use Rapid\Rapid;
use Rapid\Others;

Rapid::init("5b107695161b40780be8e1d3e4c17da4c8820244");

////GET ALL CATEGORIES
//echo "<h3>GET ALL CATEGORIES</h3>";
//$response = Others::getCategories();
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
//    echo "<hr/>";
//}

//GET ALL BY CATEGORY
echo "<h3>GET ALL By Category Example</h3>";
$response = Others::getAllByCategory("other-xxx");
print_r($response->headers());

echo "<br/>";

echo $response->paginate();

foreach ($response->data() as $response) {
    echo "<hr/>";
    echo $response->_id . "<br/>";
    echo $response->title . "<br/>";
    echo "<hr/>";
}

////GET ALL
//echo "<h3>GET ALL Example</h3>";
//$response = Others::getAll();
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
//    echo $response->image . "<br/>";
//    echo $response->short . "<br/>";
//    echo $response->description . "<br/>";
//    echo "<hr/>";
//}
//
////GET
//echo "<h3>GET Example with id zps2qaHyCwtXKqicc</h3>";
//$id = "qgRqmZS2DkrtCKMhj";
//$response = Others::get("other-2");
//echo $response->data()->title;

////LOGIN
//echo "<h3>LOGIN Example</h3>";
//$response = Rapid::login('tiyo-news-admin', 'admin');
//print_r($response);

////LOGOUT
//echo "<h3>LOGOUT Example</h3>";
//$response = Rapid::logout();
//print_r($response);

////POST
//echo "<h3>POST Example </h3>";
//$body = [
//    'title' => 'My Fourth Post',
//    'slug' => 'my-fourth-post'
//];
//$response = Others::post($body);
//print_r($response->message());

////PUT
//echo "<h3>PUT Example</h3>";
//$id = "zps2qaHyCwtXKqicc";
//$body = [
//    'title' => 'My Fifth Post',
//    'slug' => 'my-fifth-post'
//];
//$response = Others::put($id, $body);
//print_r($response);

////DELETE
//echo "<h3>DELETE Example</h3>";
//$id = "zps2qaHyCwtXKqicc";
//$response = Others::delete($id);
//print_r($response);

////DELETE ALL
//echo "<h3>DELETE ALL Example</h3>";
//$response = Others::deleteAll();
//print_r($response);



