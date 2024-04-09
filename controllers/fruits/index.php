<?php

require "Database.php";


$config = require("config.php");

$db = new Database($config);

$query = "SELECT * FROM fruits";
$params = [];

if (isset($_GET["id"]) && $_GET["id"] != "") {
  $id = $_GET["id"];
  $query .= " WHERE id=:id";
  $params[":id"] = $id;
}



$posts = $db
          ->execute($query, $params)
          ->fetchAll();

$title = "Posts👨🏿";

require "views/fruits/index.view.php";