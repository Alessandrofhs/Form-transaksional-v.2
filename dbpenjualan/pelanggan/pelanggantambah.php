
<h3> Tambah Pelanggan </h3>

<form action="" method="post">
<table>
    <h4>PELANGGAN</h4>
    <tr>
        <td> id pelanggan </td>
        <td> <input type="text" name="id"> </td>
    </tr>
    <tr>
        <td> Nama pelanggan </td>
        <td> <input type="text" name="nama"> </td>
    </tr>

    <tr>
        <td>
        <label for="jenis_kelamin">Jenis Kelamin: </label>
        <label><input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label>
        <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
        </td>
    </tr>

    <tr>
        <td> Telepon </td>
        <td> <input type="text" name="telp"> </td>
    </tr>

    <tr>
        <td> Alamat </td>
        <td> <textarea name="alamat" required></textarea> </td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>

</table>
<a class="kembali" href="pelanggan.php">kembali</a>
</form>

<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $telepon = $_POST['telp'];
    $alamat = $_POST['alamat'];
    
    mysqli_query($conn, "INSERT INTO pelanggan VALUES('$id','$nama','$jk','$telepon','$alamat')");
    echo "database tersimpan";
    header("location:pelanggan.php");
}
?>