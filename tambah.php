<form action="proses_tambah.php" method="post" onsubmit="return validateForm()">
    <table>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="nama_depan" id="nama_depan">
                <span id="error_nama_depan" class="error"></span>
            </td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="nama_belakang" id="nama_belakang">
                <span id="error_nama_belakang" class="error"></span>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="surel" id="surel">
                <span id="error_surel" class="error"></span>
            </td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="no_telp" id="no_telp">
                <span id="error_no_telp" class="error"></span>
            </td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input type="text" name="alamat" id="alamat">
                <span id="error_alamat" class="error"></span>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="submit" value="Tambah"></td>
        </tr>
    </table>
</form>

<script>
    function validateForm() {
        var firstName = document.getElementById("nama_depan").value;
        var lastName = document.getElementById("nama_belakang").value;
        var email = document.getElementById("surel").value;
        var phone = document.getElementById("no_telp").value;
        var address = document.getElementById("alamat").value;

        var isValid = true;

        if (firstName === "") {
            isValid = false;
            document.getElementById("nama_depan").style.border = "1px solid red";
            document.getElementById("error_nama_depan").textContent = "First name is required.";
        } else {
            document.getElementById("error_nama_depan").textContent = "";
        }

        if (lastName === "") {
            isValid = false;
            document.getElementById("nama_belakang").style.border = "1px solid red";
            document.getElementById("error_nama_belakang").textContent = "Last name is required.";
        } else {
            document.getElementById("error_nama_belakang").textContent = "";
        }

        if (email === "") {
            isValid = false;
            document.getElementById("surel").style.border = "1px solid red";
            document.getElementById("error_surel").textContent = "Email is required.";
        } else {
            document.getElementById("error_surel").textContent = "";
        }

        if (phone === "") {
            isValid = false;
            document.getElementById("no_telp").style.border = "1px solid red";
            document.getElementById("error_no_telp").textContent = "Phone is required.";
        } else {
            document.getElementById("error_no_telp").textContent = "";
        }

        if (address === "") {
            isValid = false;
            document.getElementById("alamat").style.border = "1px solid red";
            document.getElementById("error_alamat").textContent = "Address is required.";
        } else {
            document.getElementById("error_alamat").textContent = "";
        }

        return isValid;
    }
</script>
