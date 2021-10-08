<?php
class SignIn extends Controller
{
    public static function default()
    {
        Controller::callView(
            "layout2",
            ["page" => "signin"]
        );
    }

    public static function acceptUser()
    {
        if (isset($_POST["submit"])) {
            $user_name = stripcslashes($_POST["user"]);
            $password = stripcslashes($_POST["password"]);
            $user = Controller::callModel("user");
            if ($user->signIn($user_name, $password)) {
                header("location:../");
            } else  header("location:./");
        }
    }
}
