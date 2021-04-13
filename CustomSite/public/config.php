<?php

$host = "localhost";
$username = "root";
$password = "2194";
$dbname = "databasetest"; // will use later
$dsn = "mysql:host=$host;dbname=$dbname"; // will use later
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);