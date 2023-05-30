<?php
include_once("koneksi.php");
$id = $_GET["id"];

$query = mysqli_query($conn, "SELECT * FROM categories WHERE id='$id'");

while ($categories = mysqli_fetch_array($query)) {
    $id = $ccategories['id'];
    $name = $categories['name'];
    $categories_id = $categories['categories_id'];
    $price = $categories['price'];
    $picture = $categories['picture'];
    $size = $categories['size'];
}
?>
<form action="proses_ubah.php?id=<?php echo $id ?>" method="post">
    <table>
        <tr>
            <td>Id</td>
            <td><input type="text" name="id" value="<?php echo $id ?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $name ?>"></td>
        </tr>
        <tr>
            <td>Categories Id</td>
            <td><input type="text" name="categories_id" value="<?php echo $categories_id ?>"></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" value="<?php echo $price ?>"></td>
        </tr>
        <tr>
            <td>Picture</td>
            <td><input type="text" name="picture" value="<?php echo $picture ?>"></td>
        </tr>
        <tr>
            <td>Size</td>
            <td><input type="text" name="size" value="<?php echo $size ?>"></td>
        </tr>
        <tr>
            <td colspan=2><input type="submit" name="submit" value="Ubah"></td>
        </tr>
    </table>
</form>