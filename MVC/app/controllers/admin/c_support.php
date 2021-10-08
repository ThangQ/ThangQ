<?php
class Support extends Controller
{
    public static function default()
    {
        $suppo = Controller::callModel("userrequest");
        Controller::callView(
            "admin",
            [
                "page" => "support",
                "requests" => json_decode($suppo->showRequest())
            ]
        );
    }
}
