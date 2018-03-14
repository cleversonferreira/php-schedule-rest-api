<?php

require_once("RestMethods.php");
require_once("../model/Contact.php");

class RestHandler extends RestMethods {

    function get() {
        $statusCode = 200;
        $contact = new Contact();

        if(!empty($_GET['id'])){
            $rawData = $contact->getById();
        }else {
            $rawData = $contact->getAll();
        }

        if(empty($rawData)) {
            $statusCode = 404;
            $rawData = array('success' => 0);
        }

        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);
        echo $rawData;
    }

    function create() {
        $contact = new Contact();
        $statusCode = 200;

        $rawData = $contact->create();

        if(empty($rawData)) {
            $statusCode = 404;
            $rawData = array('success' => 0);
        }else{
            $rawData = array('success' => 1);
        }

        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        echo json_encode($rawData);
    }

    function delete() {
        $contact = new Contact();
        $statusCode = 200;

        $rawData = $contact->delete();

        if(empty($rawData)) {
            $statusCode = 404;
            $rawData = array('success' => 0);
        }else{
            $rawData = array('success' => 1);
        }

        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        echo json_encode($rawData);
    }

    function update() {
        $contact = new Contact();
        $statusCode = 200;

        $rawData = $contact->update();


        if(empty($rawData)) {
            $statusCode = 404;
            $rawData = array('success' => 0);
        }else{
            $rawData = array('success' => 1);
        }

        $requestContentType = 'application/json';
        $this->setHttpHeaders($requestContentType, $statusCode);

        echo json_encode($rawData);
    }
}
