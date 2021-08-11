<?php 
  $server_name = "localhost";
  $username = "root";
  $password = "";
  $database_name = "denr";

  $connection = new PDO("mysql:host=$server_name; dbname=$database_name", $username, $password);
?>