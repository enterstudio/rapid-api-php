<?php

namespace Rapid\Api;

/**
 * Rapid API Response Helpers
 *
 * @author piyiku
 */
class Response {

    private $response;

    public function __construct($response) {
        $this->response = $response;
    }

    public static function make($response) {
        $response = new Response($response);
        return $response;
    }

    public function response() {
        return $this->response;
    }

    public function status() {
        return $this->response->body->status;
    }
    
    public function message() {
        return $this->response->body->message;
    }

    public function data() {
        return $this->response->body->data;
    }

    public function headers() {
        return $this->response->headers;
    }

    public function count() {
        return $this->headers()['x-pagination-total-count'];
    }

    public function pageCount() {
        return $this->headers()['x-pagination-page-count'];
    }

    public function currPage() {
        return $this->headers()['x-pagination-current-page'];
    }

    public function perPage() {
        return $this->headers()['x-pagination-per-page'];
    }

}
