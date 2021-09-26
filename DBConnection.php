<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$queryCreateDB = "CREATE DATABASE IF NOT EXISTS Users";
if ($conn->query($queryCreateDB) === false)  {
    echo "Error creating database: " . $conn->error;
}
$queryUseDB = "USE users";
if ($conn->query($queryUseDB) === true) {
    $queryCreateTable = "CREATE TABLE IF NOT EXISTS users (
    Name varchar(255),
    Email varchar(255),
    Birthday varchar(255),
    Pass varchar(255)
)";
    $conn->query($queryCreateTable);
}