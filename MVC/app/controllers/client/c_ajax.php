<?php
class Ajax extends Controller
{
    public static function checkUserName()
    {
        $GLOBALS["msg"] = "";
        $db = Controller::callModel("user");
        if (!$db->checkUserName($_POST["user_name"])) {
            $GLOBALS["msg"] = "Username is exist!";
        }
        $user_name = preg_match("/^[a-zA-Z]{3,10}\d{0,4}$/", $_POST["user_name"]);
        if (!$user_name) {
            $GLOBALS["msg"] = "Username at least 2 words and 2 numbers (Valid: ab12)";
        }
        echo $GLOBALS["msg"];
    }

    public static function checkEmail()
    {
        $GLOBALS["msg"] = "";
        $db = Controller::callModel("user");
        if (!$db->checkEmail($_POST["email"])) {
            $GLOBALS["msg"] = "Email is exist!";
        }
        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $GLOBALS["msg"] = "Invalid email";
        }
        echo $GLOBALS["msg"];
    }

    public static function checkPassword()
    {
        $GLOBALS["msg"] = "";
        $pw = preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+?])[a-zA-Z\d!@#$%^&*()_+?]{8,}$/", $_POST["password"]);
        if (!$pw) {
            $GLOBALS["msg"] = "Required: numbers, uppercase letters, lowercase letters, special characters and minimum length is 8";
        }
        echo $GLOBALS["msg"];
    }

    public static function checkRePassword()
    {
        $GLOBALS["msg"] = "";
        if ($_POST["password"] != $_POST["re_password"]) {
            $GLOBALS["msg"] = "Incorrect password";
        }
        echo $GLOBALS["msg"];
    }
}
