<?php 
include_once("koneksi.php");
$id = $_GET["id"];

$query = mysqli_query($conn, "SELECT * FROM customer WHERE id='$id'");

while($customer = mysqli_fetch_array($query)){
    $namaDepan = $customer['first_name'];
    $namaBelakang = $customer['last_name'];
    $surel = $customer['email'];
    $noTlp = $customer['phone'];
    $alamat = $customer['address'];
}
?>
<form action="proses_ubah.php?id=<?php echo $id ?>" method="post">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="nama_depan" value="<?php echo $namaDepan ?>"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="nama_belakang" value="<?php echo $namaBelakang ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="surel" value="<?php echo $surel ?>"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="no_telp" value="<?php echo $noTlp ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="alamat" value="<?php echo $alamat ?>"></td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" name="submit" value="Ubah"></td>
        </tr>
    </table>
</form>