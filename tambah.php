<form action="proses_tambah.php" method="post" enctype="multipart/form-data">
    <label for="gambar">Pilih Gambar:</label>
    <input type="file" name="gambar" id="gambar">
    <br>
    <input type="submit" value="Unggah Gambar">

    <table>
        <tr>
            <td>Id</td>
            <td><input type="text" name="id" id="id">
            </td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id="name">
            </td>
        </tr>
        <tr>
            <td>Categories Id</td>
            <td><input type="text" name="categories_id" id="categories_id">
            </td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="text" name="price" id="price">
            </td>
        </tr>
        <tr>
            <td>Picture</td>
            <td><input type="text" name="picture" id="picture">
            </td>
        </tr>
        <tr>
            <td>Size</td>
            <td><input type="text" name="size" id="size">
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Tambah"></td>
        </tr>
    </table>
</form>