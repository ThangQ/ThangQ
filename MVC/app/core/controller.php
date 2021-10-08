<?php
class Controller
{
    public static function callModel($model_name)
    {
        require "./app/models/m_" . $model_name . ".php";
        return new $model_name();
    }

    public static function callView($view_name, $data = [])
    {
        require_once "./app/views/vm_" . $view_name . ".php";
    }
    public static function callChildView($view_name, $data = [])
    {
        require_once "./app/views/client/pages/childs/vdc_" . $view_name . ".php";
    }
}
