<?php

namespace Rapid;

use Unirest\Request;

class Rapid {

    public static $url = "http://localhost:3000";
    public static $version = "1";
    public static $key = "";
    public static $authUrl = "";

    public static function init($key = "", $url = "", $version = "") {
        self::$key = $key;
        if ($url)
            self::$url = $url;
        if ($version)
            self::$version = $version;
    }

    public static function getUrl($action) {
        return self::$url . "/api/v" . self::$version . "/" . $action . "/" . "?key=" . self::$key;
    }

    public static function getAuthUrl($action) {
        return self::$url . "/api/v" . self::$version . "/" . $action;
    }

    public static function login($username, $password) {
        $response = Request::post(self::getAuthUrl('login'), null, http_build_query(array('user' => $username, 'password' => $password)));

        //set userId, token, and isLoggedIn to session
        session_start();
        $_SESSION['RapidUserId'] = $response->body->data->userId;
        $_SESSION['RapidAuthToken'] = $response->body->data->authToken;
        $_SESSION['RapidIsLoggedIn'] = true;

        return $response;
    }

    public static function getAuthToken() {
        session_start();
        return $_SESSION['RapidAuthToken'];
    }

    public static function getUserId() {
        session_start();
        return $_SESSION['RapidUserId'];
    }

    public static function getIsLoggedIn() {
        session_start();
        return $_SESSION['RapidIsLoggedIn'];
    }

    public static function getAuthHeader() {
        return ['X-Auth-Token' => self::getAuthToken(), 'X-User-Id' => self::getUserId()];
    }

    public static function logout() {
        Request::get(self::getAuthUrl('logout'), self::getAuthHeader());

        //unset userId, token, and isLoggedIn to session
        session_start();
        unset($_SESSION['RapidUserId']);
        unset($_SESSION['RapidAuthToken']);
        unset($_SESSION['RapidIsLoggedIn']);
    }

    public static function getAll($route, $params = null, $headers = null) {
        $response = Request::get(self::getUrl($route), $headers, $params);
        return Response::make($response);
    }

    public static function get($route, $id, $params = null, $headers = null) {
        $response = Request::get(self::getUrl($route . '/' . $id), $headers, $params);
        return Response::make($response);
    }

    public static function post($route, $body = null, $headers = null) {
        if (!$headers)
            $headers = Rapid::getAuthHeader();

        $response = Request::post(self::getUrl($route), $headers, http_build_query($body));
        return Response::make($response);
    }

    public static function put($route, $id, $body = null, $headers = null) {
        if (!$headers)
            $headers = Rapid::getAuthHeader();

        $response = Request::put(self::getUrl($route . '/' . $id), $headers, http_build_query($body));
        return Response::make($response);
    }

}
