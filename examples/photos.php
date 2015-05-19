<?php

require_once '../vendor/autoload.php';
require_once '../src/Rapid/Photos.php';
require_once '../src/Rapid/Rapid.php';
require_once '../src/Rapid/Response.php';

use Rapid\Rapid;
use Rapid\Photos;

Rapid::init("5b107695161b40780be8e1d3e4c17da4c8820244");

////GET ALL ALBUMS
//echo "<h3>GET ALL ALBUMS</h3>";
//$response = Photos::getAlbums();
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

////GET ALL BY ALBUM
//echo "<h3>GET ALL By Album Example</h3>";
//$response = Photos::getAllByAlbum("first-album");
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

////GET ALL BY NEWS
//echo "<h3>GET ALL By News Example</h3>";
//$response = Photos::getAllByNews("bb-10jt", ['sort'=>'title']);
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

////GET ALL BY CATALOGS
//echo "<h3>GET ALL By Catalogs Example</h3>";
//$response = Photos::getAllByCatalog("kosmetik-2");
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
//$response = Photos::getAllByOther("other-2");
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
