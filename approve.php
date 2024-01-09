<?php 


$msg="";
$id = $_GET['id'];
$status=1;

	 $connection = mysqli_connect("localhost","root","","ecommerce");
	 
	 $query = mysqli_query($connection, "UPDATE orders SET status='$status' WHERE id='$id'");

     
		 
		echo "<script>alert('Transaction Successfull!!!'); window.location='myorder.php'</script>";
?>


