<?php

class App
{

    protected $controller ="Home";
    protected $method ="index";
    protected $param = [];

    public function __construct()
    {
        $url = $this->parseURL();
        // var_dump($url);

        // Cek Controller
        if (!empty($url) && file_exists("../app/controllers/". $url[0].".php")) {
            // echo "Ini controller Home";
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once"../app/controllers/". $this->controller . ".php";
        $this->controller = new $this->controller;

        // Cek Method
        if (isset($url[1])) {
            if (method_exists($this->controller,$url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // Cek Param
        if(!empty($url)){
            $this->param = array_values($url);
        }

        call_user_func_array([$this->controller, $this->method],$this->param);

        // var_dump($url);
    }

    public function parseURL(){
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/") ;
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
