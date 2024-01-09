<?php 
 session_start();
 include'config/db.php';

$id=$_GET['id'];

$sql=mysqli_query($connection, "DELETE FROM used WHERE used_id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='use_material.php?id=".$_SESSION['material']."'</script>";

?>