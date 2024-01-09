<?php
session_start();
//error_reporting(0);

$iid=$_GET['id'];



$connection = mysqli_connect("localhost", "root", "", "ecommerce");
$sql1=mysqli_query($connection, "SELECT * FROM orders WHERE id='$iid'");
	while ($row = mysqli_fetch_array($sql1))
	
	{
		
		$name=$row["name"];
		$price=$row["price"];
		$goods=$row["goods"];
		$picture=$row["picture"];
		$id=$row["id"];
		$date=$row["date"];
		$amount=$row["amount"];
		$quantity=$row["quantity"];
		$ref=$row["ref"];
		$email=$row["email"];
	

	}
	


?>

<?php

$connection = mysqli_connect("localhost", "root", "", "ecommerce");

$sql=mysqli_query($connection, "SELECT * FROM customers ");
	while ($row = mysqli_fetch_array($sql))
	
	{
		
		$fname=$row["fname"];
		$lname=$row["lname"];
		$oname=$row["oname"];
		$address=$row["address"];
		$phone=$row["phone"];
		

	}
	
?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Refund Money </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
 
  
</head>

  <body  >


 <div class="jumbotron" style="height:5px; margin-top:-35px;">
 <div class=" bg-info text-white" style="margin-top:30px;" ><marquee direction="right" style="background :; color:white;margin-left:113px; padding-right:100px;  width:1140px;">
	  ONLINE SMART CONTROL MANAGEMENT SYSTEM DESIGN BY GADDAFI YUSUF BABA REGNO--KPT/CST/16/11315  
</marquee></div>
 
 
 </div>
  <div class=" container-fluid">
      <div class="row-sm-12"> 
     
      
        <nav class="navbar navbar-expand-lg navbar-dark text-white fixed-top   bg-info " color-on-scroll="400" style="background-color:; ">
               <button class="navbar-toggler btn btn-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon "></span>

  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
  
    



  
    <ul class="navbar-nav  d-inline-sm-12 " style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
     
      
       <li class="nav-item active text-white" style="color:#FFF; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">
        <a class="nav-link text-uppercase  text-white" href="#"> Online Transaction System |</a>
      </li>
      
      <li class="nav-item active text-white" style="color:#FFF; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">
        <a class="nav-link  text-white" href="index.php"> Home</a>
      </li>
      
     
    </ul>
     <ul class="navbar-nav  d-inline-sm-12 ml-auto " style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
      <li class="nav-item">
        <a class="nav-link   text-white"   data-toggle="modal" data-target="#Modal" href=""> Admin</a>
      </li>
       <li class="nav-item">
       <a  class="nav-link" href="http://www.tweeter.com"><i class="fa fa-twitter   text-white"></i></a>
       </li>
         <li class="nav-item">
    <a class="nav-link" href="http://www.facebook.com"><i class="fa fa-facebook-square  text-white"></i></a>
    </li>
             <li class="nav-item">
    <a class="nav-link" href="http://www.instagram.com"><i class="fa  fa-instagram  text-white"></i></a>
    </li>
     </ul>
   
  </div>
  
  

  
</nav>

  <?php include('admin.php'); ?>

<div class="row" style="margin-top:-30px;">
<div class="col-sm-12 table-bordered border-white " style="border-radius:10px; height:0px; margin-top:0px; background-color:; padding-left:0px; padding-right:0px;">
<div class=" text-white text-center mb-5 bg-info" style="background-color:; height:40px; border-top-left-radius:10px; border-top-right-radius:10px; font-size:26px;"> Refund Money</div>
<div class="row">
 <?php include('sidebar.php'); ?>

<div class=" table-bordered mb-5   " style="margin-left:5px; margin-top:-45px; border-radius:10px; width:835px;">


 <div class=" offset-1 table-bordered  mb-5 col-10" style="border-radius:10px;">       
      
       <table class="text-dark w-100 table-hover table-striped mb-4 "  style="font-size:13px; margin-left:1px; background-color:; margin-top:30px;" >
 
 
 <tr class="text-dark">

<th>  Transaction Ref:</th>
<td> <?php echo $ref; ?></td>

</tr>


<tr>

<th>  Payment Date :</th>
<td> <?php echo $date; ?></td>

</tr>

<tr>

<th>  Name :</th>
<td width="70%">  <?php echo $fname; ?> &nbsp;<?php echo $lname; ?> &nbsp;<?php echo $oname; ?></td>

</tr>



<th>  Address :</th>
<td>  <?php echo $address; ?></td>

</tr>

<tr>

<th> Phone No. :</th>
<td>  <?php echo $phone; ?></td>

</tr>

<tr>

<th>  Product :</th>
<td>  <?php echo $name; ?></td>

</tr>

<tr>

<th>  Price:</th>
<td>  <?php echo $price; ?></td>

</tr>

<tr>

<th>  Quantity :</th>
<td>  <?php echo $quantity; ?></td>

</tr>



<tr>

<th>  amount  :</th>
<td> <b style="text-decoration:line-through">N</b> <?php echo  $amount ?></td>

</tr>


<tr>
<td>&nbsp;</td>
</tr>
<tr>

<td colspan="2" style="padding-top:40px;">  <i></i> </td>



</tr>
      <tr>
      <td colspan="2"> 
 <div class="pull-right">
								<a href="cancel.php?id=<?php echo $id; ?>" onClick="return confirm('Are you sure you want to cancel the transaction?')" class="btn btn-danger mb-1"><i class="fa fa-trash-o icon-large"></i> Cancel Transaction</a>
								</div>	
                                </td></tr>
 
 </table>
   
 
 
 


</div>
 
 
 
 
</div>
</div>

</div>
</div>
    <footer class="footer text-center text-light fixed-bottom bg-info  w-100 mb-0" style="background-color:  ; width: 100%; height:40px; font-size:18px;">

    <p style="margin-top:10px;">
    <a href="http://www.google.com"><i class="fa  fa-android    text-white"></i></a>
    <a href="http://www.tweeter.com"><i class="fa fa-twitter   text-white"></i></a>
    <a href="http://www.facebook.com"><i class="fa fa-facebook-square  text-white"></i></a>
    <a href="http://www.instagram.com"><i class="fa  fa-instagram  text-white"></i></a>
    <b>
      &copy 2018 e-commerce. </b></p>
   
  </footer>




</div>
</div>
<!-- End Jumbotron -->



  <!--script-->
  <script src="js/jQuery.js"></script>

  <script src="js/proper.js"></script>

  <script src="js/bootstrap.js"></script>
</body>
</html>
  
