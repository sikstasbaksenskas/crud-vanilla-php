<?php

//could be autoload
require_once "Database.php";

$database = new Database();

//get data from post
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = preg_replace('/[^A-Za-z0-9\-]/', '', $_POST["name"]);
    $code = preg_replace('/[^0-9.]+/', '', $_POST["code"]);
    $address = preg_replace('/[^A-Za-z0-9\-]/', '', $_POST["address"]);
}

//save data to db
if (isset($name)) {
    $database->insertRecord("companies", $name, $code, $address);
}
