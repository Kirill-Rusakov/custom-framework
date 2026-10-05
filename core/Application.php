<?php

namespace PHPFramework;

class Application
{
    protected string $uri;
    public Request $request;

    public function __construct() {
        $this -> uri = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?? '/';
        $this -> request = new Request($this -> uri);
    }
}