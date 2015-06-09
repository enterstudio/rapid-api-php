<?php

require_once '../vendor/autoload.php';
require_once '../src/Rapid/Images.php';
require_once '../src/Rapid/Rapid.php';
require_once '../src/Rapid/Response.php';

use Rapid\Rapid;
use Rapid\Images;

Rapid::init("c09488fe9421b97eff3cbfeaa553db8f034777bb");


////GET ALL
//echo "<h3>GET ALL Example</h3>";
//$response = Images::getAll();
//print_r($response->headers());
//
//echo "<br/>";
//
//echo $response->paginate();
//
//foreach ($response->data() as $response) {
//    echo "<hr/>";
//    echo $response->_id . "<br/>";
//    echo $response->url . "<br/>";
//    echo "<hr/>";
//}

////GET
//echo "<h3>GET Example with id dbz-bali-kopi-jpg</h3>";
//$id = "dbz-bali-kopi-jpg";
//$response = Images::get($id);
//echo $response->data()->url;




