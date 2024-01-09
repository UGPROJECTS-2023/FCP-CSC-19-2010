<?php 
 session_start();
 include'config/db.php';

$id=$_GET['id'];

$sql=mysqli_query($connection, "DELETE FROM stock  WHERE stock_id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='viewStock.php'</script>";

?>