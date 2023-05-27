<?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "Select*from pelanggan where id = '$_GET[id]'");
            $data = mysqli_fetch_array($query);
            
                ?>


<h3> Data pelanggan </h3>

<form action="" method="post">
<table>
    <h4>EDIT PELANGGAN</h4>
    <tr>
        <td> id pelanggan </td>
        <td> <input type="text" name="id" value="<?php echo $data['id'];?>" readonly> </td>
    </tr>
    
    <tr>
        <td> Nama pelanggan </td>
        <td> <input type="text" name="nama" value="<?php echo $data['nama'];?>"> </td>
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
        <td> <input type="text" name="telp" value="<?php echo $data['telp'];?>"> </td>
    </tr>

    <tr>
        <td> Alamat </td>
        <td> <textarea name="alamat" required></textarea>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</form>
</table>
<a class="kembali" href="pelanggan.php">kembali</a>

<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $JK = $_POST['jenis_kelamin'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    
    
    mysqli_query($conn, "update pelanggan set 
                            nama='$nama',jenis_kelamin='$JK',telp='$telp',alamat='$alamat' where id='$id'");
    header("location:pelanggan.php");
}
?>