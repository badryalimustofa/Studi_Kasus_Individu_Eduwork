<?php
include "koneksi.php";
$query = mysqli_query($conn ,"SELECT * FROM customer"); //silahkan ganti jika error (sesuaikan dengan nama table yang ada di local)
?>
<a href="tambah.php"> Tambah </a> 
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
<form action="" method="post">
    <table id="example" class="display" style="width:100%">
    <thead>
            <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Action</th>
            </tr>
        </thead>
        <?php if(mysqli_num_rows($query)>0){ 
            $no =1;
            while($data=mysqli_fetch_array($query)){
            ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data["first_name"]; ?></td>
                    <td><?php echo $data["last_name"]; ?></td>
                    <td><?php echo $data["email"]; ?></td>
                    <td><?php echo $data["phone"]; ?></td>
                    <td><?php echo $data["address"]; ?></td>
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