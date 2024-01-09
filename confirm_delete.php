<?php 
 session_start();
 include'config/db.php';

$id=$_GET['id'];

$sql=mysqli_query($connection, "DELETE FROM users  WHERE id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='create_admin.php'</script>";

?>