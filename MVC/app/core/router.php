<?php
class Router
{
    protected $acc_type;
    protected $controller = "home";
    protected $action = "default";
    protected $param = [];

    public function __construct()
    {
        if (isset($_SESSION["user_name"]) && $_SESSION["user_name"] == "Thang27") {
            $this->acc_type = "admin";
        } else {
            $this->acc_type = "client";
        }
        $_aurl = $this->urlProcess();
        //process "controller"
        if (file_exists("./app/controllers/" . $this->acc_type . "/c_" . $_aurl[0] . ".php")) {
            $this->controller = $_aurl[0];
            unset($_aurl[0]);
        }
        require_once "./app/controllers/" . $this->acc_type . "/c_" . $this->controller . ".php";
        new $this->controller();

        //process "action"
        if (isset($_aurl[1])) {
            if (method_exists($this->controller, $_aurl[1])) {
                $this->action = $_aurl[1];
            }
            unset($_aurl[1]);
        }

        //process "param"
        $this->param = $_aurl ? array_values($_aurl) : [0, 0];

        // echo $this->controller;
        // echo $this->action;
        // print_r($this->param);
        //call "action" method in controller class
        call_user_func_array([$this->controller, $this->action], $this->param);
    }
    public function urlProcess()
    {
        if (isset($_GET["url"])) {
            $url = filter_var(trim($_GET["url"], "/"));
            return explode("/", $url);
        }
    }
}
