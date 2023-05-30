<?php
include "koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM shoes");
?>
<a href="tambah.php"> Tambah </a>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<form action="" method="post">
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Categories_Id</th>
                <th>Stock</th>
                <th>Price</th>
                <th>Picture</th>
                <th>Size</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php if (mysqli_num_rows($query) > 0) {
            $no = 1;
            while ($data = mysqli_fetch_array($query)) {
                ?>
        <tr>
            <td>
                <?php echo $no ?>
            </td>
            <td>
                <?php echo $data["id"]; ?>
            </td>
            <td>
                <?php echo $data["name"]; ?>
            </td>
            <td>
                <?php echo $data["categories_id"]; ?>
            </td>
            <td>
                <?php echo $data["price"]; ?>
            </td>
            <td>
                <?php echo $data["picture"]; ?>
            </td>
            <td>
                <?php echo $data["size"]; ?>
            </td>
            <td>
                <a href="proses_hapus.php?id=<?php echo $data["id"]; ?>"> Delete </a> |
                <a href="ubah.php?id=<?php echo $data["id"]; ?>"> Edit </a>
            </td>
        </tr>
        <?php
                $no++;
            }
        }
        ?>
    </table>
</form>