<?php
class HomeController extends BaseController{

    public $model_home;
    public function __construct(){
        $this->model_home = $this->model('HomeModel');
    }

    function index(){
        $data = $this->model_home->getList();

        echo '<pre>';
        print_r($data);
        echo '</pre>';

        $_detail = $this->model_home->getDetail(2);
        echo $_detail;
    }
}