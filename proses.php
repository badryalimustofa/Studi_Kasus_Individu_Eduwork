<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $image = $_POST["image"];

    $sql = "INSERT INTO products (name, price, image) VALUES ('$name', '$price', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "Produk berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>