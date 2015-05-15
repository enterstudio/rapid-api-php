<?php

namespace Rapid\Api;

use Rapid\Api\Rapid;
use Unirest\Request;

class News {

    private static $route = 'news';

    public static function getAll($params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$route), $headers, $params);
        return $response;
    }

    public static function get($id, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$route . '/' . $id), $headers, $params);
        return $response;
    }

    public static function post($body = null, $headers = null) {
        if (!$headers)
            $headers = Rapid::getAuthHeader();

        $response = Request::post(Rapid::getUrl(self::$route), $headers, http_build_query($body));
        return $response;
    }

    public static function put($id, $body = null, $headers = null) {
        if (!$headers)
            $headers = Rapid::getAuthHeader();

        $response = Request::put(Rapid::getUrl(self::$route . '/' . $id), $headers, http_build_query($body));
        return $response;
    }

    public static function delete($id, $headers = null) {
        if (!$headers)
            $headers = Rapid::getAuthHeader();

        $response = Request::delete(Rapid::getUrl(self::$route . '/' . $id), $headers);
        return $response;
    }

    public static function deleteAll($headers = null) {
        if (!$headers)
            $headers = Rapid::getAuthHeader();

        $response = Request::delete(Rapid::getUrl(self::$route), $headers);
        return $response;
    }

}