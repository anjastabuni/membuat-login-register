<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "root";
$db_name = "pesbuk";

try{
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);} catch(PDOException $e) {
    die("terjadi masalah : ". $e->getMessage());
}

?>
