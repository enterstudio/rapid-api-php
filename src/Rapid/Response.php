<?php

namespace Rapid;

use JasonGrimes\Paginator;

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
        return $this->headers()['X-Pagination-Total-Count'];
    }

    public function pageCount() {
        return $this->headers()['X-Pagination-Page-Count'];
    }

    public function currPage() {
        return $this->headers()['X-Pagination-Current-Page'];
    }

    public function perPage() {
        return $this->headers()['X-Pagination-Per-Page'];
    }

    public function paginate($url) {
        $totalItems = $this->count();
        $itemsPerPage = $this->perPage();
        $currentPage = $this->currPage();
        $urlPattern = '/' . $url . '?offset=(:num)';

        $paginator = new Paginator($totalItems, $itemsPerPage, $currentPage, $urlPattern);
        return $paginator;
    }

}
