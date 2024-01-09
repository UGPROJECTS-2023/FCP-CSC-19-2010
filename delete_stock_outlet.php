<?php 
 session_start();
 include'config/db.php';

$id=$_GET['id'];

$sql=mysqli_query($connection, "DELETE FROM outlet_stock  WHERE outlet_stock_id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='outlet_viewStock.php'</script>";

?>