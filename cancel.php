<?php 
$msg="";
$id = $_GET['id'];

	 $connection = mysqli_connect("localhost","root","","ecommerce");
	 
	 $query = mysqli_query($connection, "DELETE FROM orders WHERE id='$id'");

     
		 
		 echo '<script type="text/javascript">alert("Transaction Canceled")</script>';
	 
?>

<script type="text/javascript">
window.location='orders.php';
</script>