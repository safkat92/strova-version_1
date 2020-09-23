<?php


class Application
{
    protected $controller = '';
    protected $action = '';
    protected $params = [];
    
    public function __construct()
    {
        $this->parseURI();
    }

    protected function parseURI()
    {
        $request = trim($_SERVER['REQUEST_URI'], '/');
        if (!empty($request)){
            $url = explode('/', $request);
            $this->controller = isset($url) ? $url[2] . 'Controller' : 'homeController';
            $this->action = isset($url) ? $url[3] : 'index';
            var_dump($this->action);
        }
    }


}


?>