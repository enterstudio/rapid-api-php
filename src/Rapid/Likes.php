<?php

namespace Rapid;

use Rapid\Rapid;
use Rapid\Response;
use Unirest\Request;

class Likes {

    private static $route = 'likes';
    private static $belongsToRouteAlbums = 'albums';
    private static $belongsToRouteNews = 'news';
    private static $belongsToRouteCatalogs = 'catalogs';
    private static $belongsToRouteOthers = 'others';

    public static function getAllByAlbum($albumIdOrSlug, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteAlbums . '/' . $albumIdOrSlug . '/'. self::$route), $headers, $params);
        return Response::make($response);
    }    
    
    public static function postByAlbum($albumIdOrSlug, $body = null, $headers = null) {
        $response = Request::post(Rapid::getUrl(self::$belongsToRouteAlbums . '/' . $albumIdOrSlug . '/'. self::$route), $headers, http_build_query($body));
        return Response::make($response);
    }    

    public static function getAllByNews($newsIdOrSlug, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteNews . '/' . $newsIdOrSlug . '/'. self::$route), $headers, $params);
        return Response::make($response);
    }
    
    public static function postByNews($newsIdOrSlug, $body = null, $headers = null) {
        $response = Request::post(Rapid::getUrl(self::$belongsToRouteNews . '/' . $newsIdOrSlug . '/'. self::$route), $headers, http_build_query($body));
        return Response::make($response);
    }    

    public static function getAllByCatalog($catalogIdOrSlug, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteCatalogs . '/' . $catalogIdOrSlug . '/'. self::$route), $headers, $params);
        return Response::make($response);
    }    
    
    public static function postByCatalog($catalogIdOrSlug, $body = null, $headers = null) {
        $response = Request::post(Rapid::getUrl(self::$belongsToRouteCatalogs . '/' . $catalogIdOrSlug . '/'. self::$route), $headers, http_build_query($body));
        return Response::make($response);
    }    

    public static function getAllByOther($otherIdOrSlug, $params = null, $headers = null) {
        $response = Request::get(Rapid::getUrl(self::$belongsToRouteOthers . '/' . $otherIdOrSlug . '/'. self::$route), $headers, $params);
        return Response::make($response);
    }    
    
    public static function postByOther($otherIdOrSlug, $body = null, $headers = null) {
        $response = Request::post(Rapid::getUrl(self::$belongsToRouteOthers . '/' . $otherIdOrSlug . '/'. self::$route), $headers, http_build_query($body));
        return Response::make($response);
    }    

}
