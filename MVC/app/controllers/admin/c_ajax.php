<?php
class Ajax extends Controller
{
    public static function sendQuery()
    {
        $a = Controller::callModel("userrequest");
        if ($_POST["query"] == "") {
            echo "<i class='far fa-times-circle'></i> Please enter query 😛";
        } else {
            if ($a->sendQuery($_POST["query"])) {
                echo "<i class='far fa-check-circle'></i> Success 😎 🤩";
            } else {
                echo "<i class='far fa-times-circle'></i> Check the syntax 🤧";
            }
        }
    }
}
