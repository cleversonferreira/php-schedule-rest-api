<?php

require_once("RestHandler.php");

switch($_SERVER['REQUEST_METHOD']){

    case "GET":
        $restHandler = new RestHandler();
        $restHandler->get();
        break;

    case "POST":
        $restHandler = new RestHandler();
        $restHandler->create();
        break;

    case "DELETE":
        $restHandler = new RestHandler();
        $restHandler->delete();
        break;

    case "PUT":
        $restHandler = new RestHandler();
        $restHandler->update();
        break;
}
