<?php

namespace Rapid\Api;

use Rapid\Api\Rapid;
use Rapid\Api\Response;
use Unirest\Request;

class Guestbooks {

    private static $route = 'guestbooks';

    public static function getAll($params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$route), $headers, $params);
        return Response::make($response);
    }

    public static function post($body = null, $headers = null) {
        if (!$headers)
            $headers = Rapid::getAuthHeader();

        $response = Request::post(Rapid::getUrl(self::$route), $headers, http_build_query($body));
        return Response::make($response);
    }    

}
