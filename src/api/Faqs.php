<?php

namespace Rapid\Api;

use Rapid\Api\Rapid;
use Rapid\Api\Response;
use Unirest\Request;

class Faqs {

    private static $route = 'faqs';

    public static function getAll($params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$route), $headers, $params);
        return Response::make($response);
    }

}
