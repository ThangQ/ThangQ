<?php
class Home extends Controller
{
    public static function default()
    {
        $user = Controller::callModel("user");
        $list_user = $user->getListUser();
        Controller::callView(
            "admin",
            [
                "page" => "home",
                "users" => json_decode($list_user),
                "numof_users" => json_decode($user->numOfUsers())
            ]
        );
    }
    public static function logOut()
    {
        session_destroy();
        header("location:../signin");
    }
}
