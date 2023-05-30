<?php
include_once("koneksi.php");
if (isset($_FILES['gambar'])) {
    $file = $_FILES['gambar'];

    // Informasi tentang file
    $namaFile = $file['name'];
    $ukuranFile = $file['size'];
    $tmpFile = $file['tmp_name'];
    $error = $file['error'];

    // Pindahkan file ke lokasi yang diinginkan
    if ($error === UPLOAD_ERR_OK) {
        $tujuan = 'folder-tujuan/' . $namaFile;
        move_uploaded_file($tmpFile, $tujuan);
        echo "Gambar berhasil diunggah.";
    } else {
        echo "Terjadi kesalahan dalam unggah gambar.";
    }
}

$id = $_POST['id'];
$name = $_POST['name'];
$categories_id = $_POST['categories_id'];
$price = $_POST['price'];
$picture = $_POST['picture'];
$size = $_POST['size'];

$result = mysqli_query($conn, "INSERT INTO `shoes` (`id`,`name`,`categories_id`,`price`,`picture`,`size`) VALUES ('$id','$name','$categories_id','$price','$picture','$size')");

error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Location:index.php");
?>