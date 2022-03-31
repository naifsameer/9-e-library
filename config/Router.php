<?php

namespace app\config;

use app\helpers\UtilHelper;

/**
 *  Router
 * @package app
 */
class Router
{
    private static array $getRoutes = [];
    private static array $postRoutes = [];

    public static function get($url, $fn)
    {
        self::$getRoutes[$url] = $fn;
    }

    public static function post($url, $fn)
    {
        self::$postRoutes[$url] = $fn;
    }

    public static function getURL()
    {
        $url = $_SERVER['REQUEST_URI'];

        return parse_url($url)['path'];
    }

    public static function getQuery()
    {
        $url = $_SERVER['REQUEST_URI'];
        $urlQuery =  parse_url($url)['query'] ?? '';

        return $urlQuery;
    }

    public static function resolve()
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        $url = self::getURL();

        if ($method === 'get') {
            $fn = self::$getRoutes[$url] ?? null;
        } else {
            $fn = self::$postRoutes[$url] ?? null;
        }

        // 404
        if (!$fn) {
            self::render("404");
            exit;
        }

        call_user_func($fn);
    }

    public static function render(string $view, array $params = [])
    {
        // head section
        include __DIR__ . "/../views/includes/head.php";

        // render the view 
        include __DIR__ . "/../views/$view.php";
    }

    public static function vue()
    {
        // render the view 
        include __DIR__ . "/../views/dashboard/index.html";
    }

    public static function redirect(string $redirect_url)
    {
        header("Location: $redirect_url");
    }
}
