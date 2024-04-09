<?php 
require "Validator.php";
require "Database.php";
$config = require("config.php");
$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $errors = [];

    if (!Validator::string($_POST["fruit_name"], min: 1, max: 255)) {
        $errors["fruit_name"] = "fruit name cannot be empty or too long";
    }

    if (!Validator::number($_POST["Calories"], min:1,max:10000)){
        $errors["Calories"] = "too much Calories";
    }
    if (empty($errors)) {
        $query = "UPDATE fruits
        SET fruit_name = :fruit_name, Calories = :Calories
        WHERE id = :id";
        $params = [
        ":fruit_name" => $_POST["fruit_name"],
        ":Calories" => $_POST["Calories"],
        ":id" => $_POST["id"]
    ];
   
        $db->execute($query, $params);
        header('location: /');
        die();

 }
}
$query = "SELECT * FROM fruits WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();


require "views/fruits/edit.view.php";