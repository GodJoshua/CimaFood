<?php

$server = 'localhost';
$username = 'root';
$password = 'arath123';
$database = 'cimafood';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password,
  array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")); //Nos da los valores en formtato utf8

} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>
