<?php

namespace Rapid;

use Rapid\Rapid;
use Rapid\Response;
use Unirest\Request;

class MultipleFiles {

    private static $route = 'multipleFiles';
    private static $belongsToRoute = 'files';

    public static function getAllByFile($fileIdOrSlug, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRoute . '/' . $fileIdOrSlug . '/'. self::$route), $headers, $params);
        return Response::make($response);
    }    

}
