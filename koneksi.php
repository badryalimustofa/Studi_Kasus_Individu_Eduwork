<?php
$hostName = "localhost";
$username = "root";
$password = "";
$dbName = "db_shoes_store";
error_reporting(E_ALL);
ini_set('display_errors', 1);
$conn = mysqli_connect($hostName, $username, $password, $dbName);

if ($conn) {
    // echo "connected";
} else {
    echo "not connected";
}

?>