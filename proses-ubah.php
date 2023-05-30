<?php
include_once("koneksi.php");

$id = $_GET["id"];

$id = $_POST['id'];
$name = $_POST['name'];
$categories_id = $_POST['categories_id'];
$price = $_POST['price'];
$picture = $_POST['picture'];
$size = $_POST['size'];

$result = mysqli_query($conn, "UPDATE `shoes` SET id='$id',name='$name',categories_id='$categories_id',price='$price', picture='$picture', size='$size' WHERE id='$id';");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.php");
?>