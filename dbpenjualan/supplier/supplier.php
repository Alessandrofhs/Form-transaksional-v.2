<!DOCTYPE html>
<html>

<head>
    <title>Form Supplier - Hasil Tabel</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h2>Hasil Tabel Supplier</h2>
        <table class="table">
            <form>
                <h2 align="center"> SUPPLIER</h2>
                <a class="btn btn-primary mb-3" href="suppliertambah.php">Tambah</a>
                <table border="1" align="center" width="100%">
                    <tr bgcolor="green">
                        <th>Id Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Telepon</th>
                        <th>Alamat</th>
                        <th>Tindakan</th>
                    </tr>
                    <tr>
                        <?php
                        include '../koneksi.php';
                        $query = mysqli_query($conn, "Select*from supplier");
                        while ($data = mysqli_fetch_array($query)) {
                            ?>
                        <tr>
                            <td><?php echo $data['id']; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['telp']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td>
                                <a class="edit" href="supplieredit.php?id=<?php echo $data['id']; ?>">Edit</a> |
                                <a class="hapus" href="supplierhapus.php?id=<?php echo $data['id']; ?>"
                                    onclick="return confirm('yakin hapus?')">Hapus</a>
                            </td>
                        </tr>
                        </tr>
                    <?php } ?>
                </table>
                <p><a class="btn btn-secondary" href="../menuutama.php">Kembali</a></p>
            </form>
            </tbody>
        </table>
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
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn, "INSERT INTO supplier VALUES('$id','$nama','$telp','$alamat')");
    echo "database tersimpan";
}
?>