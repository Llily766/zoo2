<?php

class Request
{
    private string $method;
    private string $pathInfo;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->pathInfo = $_SERVER['PATH_INFO'] ?? '/';
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getPathInfo(): string
    {
        return $this->pathInfo;
    }

}