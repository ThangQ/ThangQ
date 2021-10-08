<?php
function checkUserName($user_name)
{
    $user_name = preg_match("/^[a-zA-Z]{3,10}\d{0,4}$/", $_POST["user_name"]);
    if (!$user_name) {
        return false;
    }
    return true;
}

function checkEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }
    return true;
}

function checkPassword($password)
{
    $password = preg_match("/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+?])[a-zA-Z\d!@#$%^&*()_+?]{8,}$/", $password);
    if (!$password) {
        return false;
    }
    return true;
}

function checkRePassword($password, $re_password)
{
    if ($password !== $re_password) {
        return false;
    }
    return true;
}
