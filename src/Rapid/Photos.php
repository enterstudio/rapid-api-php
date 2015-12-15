<?php

namespace Rapid;

use Rapid\Rapid;
use Rapid\Response;
use Unirest\Request;

class Photos {

    private static $route = 'photos';
    private static $belongsToRouteAlbums = 'albums';
    private static $belongsToRouteNews = 'news';
    private static $belongsToRouteCatalogs = 'catalogs';
    private static $belongsToRouteOthers = 'others';

    public static function getAlbums($params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteAlbums), $headers, $params);
        return Response::make($response);
    }
    
    public static function getAlbum($albumIdOrSlug = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteAlbums . '/' . $albumIdOrSlug), $headers);
        return Response::make($response);
    }

    public static function getAllByAlbum($albumIdOrSlug, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteAlbums . '/' . $albumIdOrSlug . '/'. self::$route), $headers, $params);
        return Response::make($response);
    }    

    public static function getAllByNews($newsIdOrSlug, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteNews . '/' . $newsIdOrSlug . '/'. self::$route), $headers, $params);
        return Response::make($response);
    }    

    public static function getAllByCatalog($catalogIdOrSlug, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteCatalogs . '/' . $catalogIdOrSlug . '/'. self::$route), $headers, $params);
        return Response::make($response);
    }    

    public static function getAllByOther($otherIdOrSlug, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteOthers . '/' . $otherIdOrSlug . '/'. self::$route), $headers, $params);
        return Response::make($response);
    }    

}
