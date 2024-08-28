<?php

namespace Request;

class Request {
    private Get $get;
    private Post $post;
    private Server $server;
    private $method;

    public function __construct() {
        $this->get = new Get($_GET);
        $this->post = new Post($_POST);
        $this->server = new Server($_SERVER);
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    public function getGet() {
        return $this->get;
    }

    public function getPost() {
        return $this->post;
    }

    public function getServer() {
        return $this->server;
    }

    public function getMethod() {
        return $this->method;
    }

    public function getUrl() {
        $url = $_SERVER['REQUEST_URI'];
        $parsedUrl = parse_url($url);
        return $parsedUrl['path'];
    }
}