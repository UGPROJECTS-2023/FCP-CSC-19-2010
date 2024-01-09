<?php 
 session_start();
 include'config/db.php';

$id=$_GET['id'];

$sql=mysqli_query($connection, "DELETE FROM sales  WHERE transaction_id='$id'");

echo "<script>alert('Record Deleted!!!'); window.location='transactions_history.php'</script>";

?>