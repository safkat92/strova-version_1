<?php


class Application
{
    protected $controller = '';
    protected $action = '';
    protected $params = [];
    
    public function __construct()
    {
        $this->parseURI();
        if (file_exists(CONTROLLER . $this->controller . '.php')){
            $this->controller = new $this->controller;
            if (method_exists($this->controller, $this->action)){
                call_user_func_array([$this->controller, $this->action], $this->params);
            } else {
                $this->controller->index();    
            }
        } else {
            $this->controller->index();
        }
    }

    protected function parseURI()
    {
        $request = trim($_SERVER['REQUEST_URI'], '/');
        if (!empty($request)){
            $url = explode('/', $request);
            $this->controller = isset($url) ? $url[2] . 'Controller' : 'homeController';
            $this->action = isset($url) ? $url[3] : 'index';
            for ($i = 0; $i < 4; $i++){
                unset($url[$i]);
            }
            $this->params = !empty($url) ? array_values($url) : [];
        }
    }


}


?>