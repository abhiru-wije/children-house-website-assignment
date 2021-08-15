<?php

//Params to connect a database
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "samadhi";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

if (!$conn) {
    die('Database connection failed');
}