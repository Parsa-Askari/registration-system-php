<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "mylogindatabse";
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
return $pdo;