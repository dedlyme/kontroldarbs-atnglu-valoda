<?php
require "Database.php";
$config = require("config.php");
$db = new Database($config);

$query = "SELECT * FROM fruits WHERE id = :id";
$params = [":id" => $_GET["id"]];

$post = $db->execute($query, $params)->fetch();


require "views/fruits/show.view.php";