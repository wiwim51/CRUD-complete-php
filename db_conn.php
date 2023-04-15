<?php

require_once realpath(__DIR__ . "/vendor/autoload.php");

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

$servername = "localhost";
$username = $_ENV["DB_USERNAME"];
$password = $_ENV["DB_PASSWORD"];
$dbname = $_ENV["DB_NAME"];

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";