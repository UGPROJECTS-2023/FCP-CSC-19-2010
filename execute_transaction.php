<?php
 session_start();
 include'config/db.php';

 if (isset($_POST['submit'])) {
 


$quantity=$_POST['quantity1'];
$total=$_POST['total1'];
$name=$_POST['name'];
$amount=$_POST['amount'];
$stock_id=$_POST['stock_id'];
$submit=$_POST['submit'];

foreach ($submit as $key => $sub) {
	# code...

$sql = mysqli_query($connection,"INSERT INTO sales (stock_id, quantity, amount, total, transaction_id) VALUES('$sub','$quantity[$key]', '$amount', '$total[$key]', '".$_SESSION['transaction']."') ");
 
echo "<script> window.location='transactions.php'</script>";

 }
 }
?>