<?php 
$msg="";
$id = $_GET['id'];

	 $connection = mysqli_connect("localhost","root","","ecommerce");
	 
	 $query = mysqli_query($connection, "DELETE FROM customers WHERE acc_id='$id'");

     
		 
		 echo '<script type="text/javascript">alert("Deleted")</script>';
	 
?>

<script type="text/javascript">
window.location='customers.php';
</script>