<?php


namespace application\core;


class View
{
    public $path;
    public $layout = 'default';
    public $route;

    public function __construct($route)
    {
        $this->route = $route;
    }

    public function Render($title, $vars = [])
    {   extract($vars);
        ob_start();
        require_once "application/views/{$this->route['controller']}/{$this->route['action']}.php";
        $content = ob_get_clean();
        require_once "application/views/layouts/{$this->layout}.php";


    }

    public function redirect($url)
    {
        header('Location:  /'.$url);
        exit;
    }

    public function location($url)
    {
        exit(json_encode(['url' => $url]));
    }

    public function message($status, $message)
    {
        exit(json_encode(['status' => $status, 'message' => $message]));
    }

    public static function errorPage($code)
    {
        http_response_code($code);
        $path = "application/views/error_pages/" . $code . ".php";
        if(file_exists($path))
        {
            require_once $path;
        }
        exit;
    }
}