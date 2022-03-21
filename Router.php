<?php


namespace app;


/**
 *  Router
 * @package app
 */
class Router
{
    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($url, $fn)
    {
        $this->getRoutes[$url] = $fn;
    }

    public function post($url, $fn)
    {
        $this->postRoutes[$url] = $fn;
    }

    public function resolve()
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        $url = $_SERVER['REQUEST_URI'];

        // strip GET variables from URL
        if (($pos = strpos($url, '?')) !== false) {
            $url = substr($url, 0, $pos);
        }

        if ($method === 'get') {
            $fn = $this->getRoutes[$url] ?? null;
        } else {
            $fn = $this->postRoutes[$url] ?? null;
        }

        // 404
        if (!$fn) {
            // echo 'Page not found';
            $this->render("404");
            exit;
        }


        echo call_user_func($fn, $this);
    }

    public function render(string $view, array $params = [])
    {
        // head section
        include __DIR__ . "/views/includes/head.php";

        // render the view 
        include __DIR__ . "/views/$view.php";

        // footer section
        include __DIR__ . "/views/includes/footer.php";
    }
}
