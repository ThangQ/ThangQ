<?php
class Home extends Controller
{
    public function __construct()
    {
    }
    public static function default()
    {
        $user = Controller::callModel("user");
        Controller::callView(
            "layout1",
            [
                "page" => "home",
                "numof_users" => $user->numOfUsers()
                //"l_user" => $user->getListUser()
            ]
        );
    }

    public static function error()
    {
        echo 1;
    }
}
