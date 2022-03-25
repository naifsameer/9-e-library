<?php

namespace app\config;

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

    public static function resolve()
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        $url = $_SERVER['REQUEST_URI'];

        // strip GET variables from URL
        if (($pos = strpos($url, '?')) !== false) {
            $url = substr($url, 0, $pos);
        }

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

        // footer section
        include __DIR__ . "/../views/includes/footer.php";
    }

    public static function redirect(string $redirect_url)
    {
        header("Location: $redirect_url");
    }
}
