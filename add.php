<?php
 session_start();
 include'config/db.php';

$stock_id=$_GET['stock_id'];


$sql = mysqli_query($connection,"SELECT * FROM stock WHERE stock_id='$stock_id' ");
		while ($row=mysqli_fetch_array($sql)) {

			$amount=$row["customers_price"];
		
$_SESSION['quantity']=$_POST['quantity'];
$_SESSION['total']=$_POST['total'];
 


$sql = mysqli_query($connection,"INSERT INTO sales (stock_id, quantity, amount, total, transaction_id) VALUES('$stock_id','".$_SESSION['quantity']."', '$amount', '".$_SESSION['total']."', '".$_SESSION['transaction']."') ");
 
echo "<script> window.location='generate_invoice.php'</script>";

 
}
?>