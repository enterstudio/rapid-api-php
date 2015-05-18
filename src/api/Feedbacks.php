<?php

namespace Rapid\Api;

use Rapid\Api\Rapid;
use Rapid\Api\Response;
use Unirest\Request;

class Feedbacks {

    private static $route = 'feedbacks';

    public static function post($body = null, $headers = null) {
        $response = Request::post(Rapid::getUrl(self::$route), $headers, http_build_query($body));
        return Response::make($response);
    }   

}
