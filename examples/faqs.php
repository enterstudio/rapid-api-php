<?php

require_once '../vendor/autoload.php';
require_once '../src/api/Faqs.php';
require_once '../src/api/Rapid.php';
require_once '../src/api/Response.php';

use Rapid\Api\Rapid;
use Rapid\Api\Faqs;

Rapid::init("5b107695161b40780be8e1d3e4c17da4c8820244");

//GET ALL
echo "<h3>GET ALL Example</h3>";
$response = Faqs::getAll();
print_r($response->headers());

echo "<br/>";

echo $response->paginate();

foreach ($response->data() as $response) {
    echo "<hr/>";
    echo $response->_id . "<br/>";
    echo $response->question . "<br/>";
    echo $response->answer . "<br/>";
    echo "<hr/>";
}

////GET
//echo "<h3>GET Example with id zps2qaHyCwtXKqicc</h3>";
//$id = "zps2qaHyCwtXKqicc";
//$response = Faqs::get($id, ["title" => "b"]);
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
//$response = Faqs::post($body);
//print_r($response->message());

////PUT
//echo "<h3>PUT Example</h3>";
//$id = "zps2qaHyCwtXKqicc";
//$body = [
//    'title' => 'My Fifth Post',
//    'slug' => 'my-fifth-post'
//];
//$response = Faqs::put($id, $body);
//print_r($response);

////DELETE
//echo "<h3>DELETE Example</h3>";
//$id = "zps2qaHyCwtXKqicc";
//$response = Faqs::delete($id);
//print_r($response);

////DELETE ALL
//echo "<h3>DELETE ALL Example</h3>";
//$response = Faqs::deleteAll();
//print_r($response);



