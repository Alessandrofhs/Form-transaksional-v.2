<!DOCTYPE html>
<html>

<head>
    <title>Form Penambahan Supplier</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Form Penambahan Supplier</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="id">ID Supplier:</label>
                <input type="text" class="form-control" id="id" name="id" required>
            </div>
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="nama" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="telp">Telepon:</label>
                <input type="telp" class="form-control" id="telp" name="telp" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="alamat" class="form-control" id="alamat" name="alamat" required>
            </div>
            <button type="submit" name="proses" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>


<?php

if (isset($_POST['proses'])) {
    include '../koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $telepon = $_POST['telp'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn, "INSERT INTO supplier VALUES('$id','$nama','$telepon','$alamat')");
    echo "database tersimpan";
    header("location:supplier.php");
}
?>