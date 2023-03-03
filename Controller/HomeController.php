<?php

class HomeController extends Controller
{
    private $HomeModel;

    public function __construct()
    {
        $this->loadModel('HomeModel');
        $this->HomeModel = new HomeModel;

    }
    public function index()
    {
        $data = [];
        $data = $this->HomeModel->getAll();
        return $this->view('.Home', $data);

    }

}
?>