<?php

class Controller
{
    protected $view;

    public function view($viewName, $viewData = []){
        $this->view = new View($viewName, $viewData);
        return $this->view;
    }
}

?>