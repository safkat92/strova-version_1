<?php


class homeController extends Controller
{
    public function __construct()
    {

    }

    public function index()
    {
        echo "welcome here";
        var_dump($this);
    }

    public function strova($id = '', $name = '')
    {
        echo "oh you found me then";
        echo "i am" . $id . $name;
    }
}








?>