<?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "Select*from barang where kode_barang = '$_GET[kode_barang]'");
            $data = mysqli_fetch_array($query);
            
                ?>

<h3> Data Barang </h3>

<form action="" method="post">
<table>
    <h4>UBAH DATA BARANG</h4>
    <tr>
        <td> Kode Barang </td>
        <td> <input type="text" name="kode_barang" value="<?php echo $data['kode_barang'];?>" readonly> </td>
    </tr>
    
    <tr>
        <td> Nama Barang </td>
        <td> <input type="text" name="nama_barang" value="<?php echo $data['nama_barang'];?>"> </td>
    </tr>

    <tr>
        <td> Harga </td>
        <td> <input type="text" name="harga" value="<?php echo $data['harga'];?>"> </td>
    </tr>

    <tr>
        <td> Stok </td>
        <td> <input type="text" name="stok" value="<?php echo $data['stok'];?>"> </td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Ubah"> </td>
    </tr>
</form>
</table>
<a class="kembali" href="barang.php">kembali</a>

<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
    $kodebarang = $_POST['kode_barang'];
    $namabarang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    
    
    mysqli_query($conn, "update barang set 
                            nama_barang='$namabarang', harga = $harga, stok = $stok where kode_barang='$kodebarang'");

    header("location:barang.php");
}
?>