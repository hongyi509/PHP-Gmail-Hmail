<?php

class Controller
{

    public static function view($view, $data = [], $hotmailroute = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}
