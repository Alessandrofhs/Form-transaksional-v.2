<?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "Select*from supplier where id = '$_GET[id]'");
            $data = mysqli_fetch_array($query);
            
                ?>


<h3> Data Supplier </h3>

<form action="" method="post">
<table>
    <h4>EDIT SUPPLIER</h4>
    <tr>
        <td> id Supplier </td>
        <td> <input type="text" name="id" value="<?php echo $data['id'];?>" readonly> </td>
    </tr>
    
    <tr>
        <td> Nama SUpplier </td>
        <td> <input type="text" name="nama" value="<?php echo $data['nama'];?>"> </td>
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
<a class="kembali" href="supplier.php">kembali</a>

<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    
    
    mysqli_query($conn, "update supplier set 
                            nama='$nama',telp='$telp',alamat='$alamat' where id='$id'");
    header("location:supplier.php");
}
?>