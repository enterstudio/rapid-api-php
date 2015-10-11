<?php

namespace Rapid;

use Rapid\Rapid;
use Rapid\Response;
use Unirest\Request;

class MultipleFiles {

    private static $route = 'multipleFiles';
    private static $belongsToRouteFiles = 'files';
    private static $belongsToRouteCatalogs = 'catalogs';

    public static function getAllByFile($fileIdOrSlug, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteFiles . '/' . $fileIdOrSlug . '/'. self::$route), $headers, $params);
        return Response::make($response);
    }    
    
    public static function getAllByCatalog($catalogIdOrSlug, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteCatalogs . '/' . $catalogIdOrSlug . '/'. self::$route), $headers, $params);
        return Response::make($response);
    }    

}
