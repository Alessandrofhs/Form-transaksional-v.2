<?php
// include database connection file
include '../koneksi.php';
 
// Get id from URL to delete that user
if (isset($_GET['id'])) {
    $id=$_GET['id'];
}
 
// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM supplier WHERE id='$id'");
 
// After delete redirect to Home, so that latest user list will be displayed.
header("Location:supplier.php");
?>