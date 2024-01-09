<?php 
 session_start();
 include'config/db.php';

$idd=$_GET['idd'];
$id=$_GET['id'];

$sql=mysqli_query($connection, "UPDATE outlet_stock  SET status='1' WHERE outlet_stock_id='$idd'");

echo "<script> window.location='view.php?id=$id'</script>";

?>