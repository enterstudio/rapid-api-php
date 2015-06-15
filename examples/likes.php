<?php

require_once '../vendor/autoload.php';
require_once '../src/Rapid/Likes.php';
require_once '../src/Rapid/Rapid.php';
require_once '../src/Rapid/Response.php';

use Rapid\Rapid;
use Rapid\Likes;

Rapid::init("c09488fe9421b97eff3cbfeaa553db8f034777bb");


////GET ALL BY ALBUM
//echo "<h3>GET ALL By Album Example</h3>";
//$response = Likes::getAllByAlbum("first-album");
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
//    echo "<hr/>";
//}

//POST BY NEWS
echo "<h3>POST By News Example</h3>";
$response = Likes::postByNews("my-fourth-post", ['identifier'=>'egaxx']);

//GET ALL BY NEWS
echo "<h3>GET ALL By News Example</h3>";
$response = Likes::getAllByNews("my-fourth-post");
echo $response->headers()['x-pagination-total-count'];

echo "<br/>";

echo $response->paginate();

foreach ($response->data() as $response) {
    echo "<hr/>";
    echo $response->_id . "<br/>";
    echo $response->identifier . "<br/>";    
    echo "<hr/>";
}

////GET ALL BY CATALOGS
//echo "<h3>GET ALL By Catalogs Example</h3>";
//$response = Likes::getAllByCatalog("kosmetik-2");
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
//    echo "<hr/>";
//}

////GET ALL BY OTHERS
//echo "<h3>GET ALL By Others Example</h3>";
//$response = Likes::getAllByOther("other-2");
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
//    echo "<hr/>";
//}
