<?php
require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $errors = [];

    if (!Validator::string($_POST["fruit_name"], min: 1, max: 255)) {
        $errors["fruit_name"] = "fruit name cant be empty or too long";
    }

    if (!Validator::number($_POST["Calories"], min:1,max:10000)){
        $errors["Calories"] = "calories too little or too much";
    }
    if (empty($errors)) {
        $query = " INSERT INTO fruits (fruit_name, Calories) 
        VALUE (:fruit_name, :Calories);";
        $params = [
        ":fruit_name" => $_POST["fruit_name"],
        ":Calories" => $_POST["Calories"]
        ];
   
        $db->execute($query, $params);
        header('location: /');
        die();

 }
}




$title = "create a post";
require "views/fruits/create.view.php";
