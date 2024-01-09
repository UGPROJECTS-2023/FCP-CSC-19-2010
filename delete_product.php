<?php 
 session_start();
 include'config/db.php';

$id=$_GET['id'];

$sql=mysqli_query($connection, "DELETE FROM product WHERE product_id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='generate.php'</script>";

?>