<?php 
 session_start();
 include'config/db.php';

$id=$_GET['id'];

$sql=mysqli_query($connection, "DELETE FROM outlets  WHERE outlet_id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='viewOutlets.php'</script>";

?>