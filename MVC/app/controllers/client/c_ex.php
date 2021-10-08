<?php
class Ex extends Controller
{
    public static function default()
    {
        $a = Controller::callModel("user");
        Controller::callView(
            "ex",
            ["haha" => $a->getListUser()]
        );
    }
}