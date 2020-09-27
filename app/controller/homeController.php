<?php


class homeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        echo "welcome here";
        
    }

    public function strova($id = '', $name = '')
    {
        $this->view('home/index', [
            'id' => $id,
            'name' => $name
        ]);
        $this->view->render();
    }
}








?>