<form>
<h2 align="center"> PELANGGAN</h2>
<a class="tambah" href="pelanggantambah.php">tambah</a>
<table border="1" align="center" width="100%">
    <tr bgcolor="green">
        <th>Id Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>Jenis Kelamin</th>
        <th>Telepon</th>
        <th>Alamat</th>
        <th>Tindakan</th>
    </tr>
    <tr>
        <?php
            include '../koneksi.php';
            $query = mysqli_query($conn, "Select*from pelanggan");
            while ($data=mysqli_fetch_array($query)){
                ?>
                <tr>
                <td><?php echo $data['id']   ;?></td>
                <td><?php echo $data['nama'] ;?></td>
                <td><?php echo $data['jenis_kelamin'] ;?></td>
                <td><?php echo $data['telp'] ;?></td>
                <td><?php echo $data['alamat'] ;?></td>
                <td>
                <a class="edit" href="pelangganedit.php?id=<?php echo $data['id'];?>" >Edit</a> |
                <a class="hapus" href="pelangganhapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('yakin hapus?')">Hapus</a>				
                </td>
            </tr>
            </tr>
            <?php } ?>

</table>
<a class="kembali" href="../menuutama.php">kembali</a>
</form>

<?php

if (isset($_POST['proses'])){
    include '../koneksi.php';
  
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jk = $_POST['jenis_kelamin'];
    $telp = $_POST['telp'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn, "INSERT INTO pelanggan VALUES('$id','$nama','$jk','$telp','$alamat')");
    echo "database tersimpan";
}
?>