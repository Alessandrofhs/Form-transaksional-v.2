
<h3> Data Barang </h3>

<form action="" method="post">
<table>
    <h4>Data Barang</h4>
    <tr>
        <td> kode barang </td>
        <td> <input type="text" name="kode_barang"> </td>
    </tr>
    <tr>
        <td> Nama Barang </td>
        <td> <input type="text" name="nama_barang"> </td>
    </tr>
    <tr>
        <td> Harga </td>
        <td> <input type="text" name="harga"> </td>
    </tr>
    <tr>
        <td> Stok </td>
        <td> <input type="text" name="stok"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>

</form>

<form>
<h2 align="center">Data Barang </h2>
<table border="1" align="center" width="100%">
    <tr bgcolor="green">
        <th>kode Barang</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Tindakan</th>
    </tr>
    <tr>
        <?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "Select*from barang");
            while ($data=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $data['kode_barang']   ;?></td>
                <td><?php echo $data['nama_barang'] ;?></td>
                <td><?php echo $data['harga'] ;?></td>
                <td><?php echo $data['stok'] ;?></td>
                <td>
                <a class="edit" href="barangedit.php?kode_barang=<?php echo $data['kode_barang'];?>" >Edit</a> |
                <a class="hapus" href="baranghapus.php?kode_barang=<?php echo $data['kode_barang']; ?>" onclick="return confirm('yakin hapus?')">Hapus</a>				
                </td>
                
            </tr>
            <?php }
            ?>
    </tr>  
</table>
<a class="kembali" href="../menuutama.php">kembali</a>
</form>

<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
  
    $kodebarang = $_POST['kode_barang'];
    $namabarang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    
    mysqli_query($conn, "INSERT INTO barang VALUES('$kodebarang','$namabarang','$harga','$stok')");
    echo "database tersimpan";
    header("location:barang.php");
}
?>