<?php
class MyAccount extends Controller
{
    public function __construct()
    {
        if (!isset($_SESSION["user_name"]))
            header("location:./");
    }
    public static function default()
    {
        $user = Controller::callModel("user");
        Controller::callView(
            "layout1",
            [
                "page" => "myaccount",
                "item" => "support",
                "numof_users" => $user->numOfUsers()
                //"l_user" => $user->getListUser()
            ]
        );
    }

    public static function setting()
    {
        //Controller::callChildView("setting");
        $user = Controller::callModel("user");
        Controller::callView(
            "layout1",
            [
                "page" => "myaccount",
                "item" => "setting",
                "numof_users" => $user->numOfUsers()
            ]
        );
    }

    public static function profile()
    {
        //Controller::callChildView("profile");
        $user = Controller::callModel("user");
        Controller::callView(
            "layout1",
            [
                "page" => "myaccount",
                "item" => "profile",
                "numof_users" => $user->numOfUsers()
            ]
        );
    }
    public static function security()
    {
        //Controller::callChildView("security");
        $user = Controller::callModel("user");
        Controller::callView(
            "layout1",
            [
                "page" => "myaccount",
                "item" => "security",
                "numof_users" => $user->numOfUsers()
            ]
        );
    }

    public static function support()
    {
        //Controller::callChildView("support");
        $user = Controller::callModel("user");
        Controller::callView(
            "layout1",
            [
                "page" => "myaccount",
                "item" => "support",
                "numof_users" => $user->numOfUsers()
            ]
        );
    }

    public static function sendSupport()
    {
        $support_content = $_POST["support_content"];
        if ($support_content != "" && strlen($support_content) > 15) {
            $model = Controller::callModel("user");
            $model->sendSupport($_POST["support_content"]);
            Header("location:./");
        } else {
            Header("location:./");
        }
    }

    public static function logOut()
    {
        session_destroy();
        header("location:../signin");
    }
    public static function delAcc()
    {
        $user = Controller::callModel("user");
        $user->delUser();
        session_destroy();
        header("location:../signup");
    }
}
