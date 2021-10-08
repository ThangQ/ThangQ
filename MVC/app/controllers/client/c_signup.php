<?php
require_once "./app/helpers/checks.php";
class SignUp extends Controller
{
    public static function default()
    {
        Controller::callView(
            "layout2",
            [
                "page" => "signup"
            ]
        );
    }

    public static function addUser()
    {
        if (isset($_POST["submit"])) {
            $user_name = stripcslashes($_POST["user_name"]);
            $email = stripcslashes($_POST["email"]);
            $password = stripcslashes($_POST["password"]);
            $re_password = stripcslashes($_POST["re_password"]);

            if (checkUserName($user_name) && checkEmail($email) && checkPassword($password) && checkRePassword($password, $re_password)) {
                $password = password_hash($re_password, PASSWORD_DEFAULT);
                $user = Controller::callModel("user");
                if ($user->signUp($user_name, $email, $password)) {
                    $_SESSION["user_name"] = $user_name;
                    header("location:../");
                } else
                    header("location:./");
            } else
                header("location:./");
        }
    }
}
