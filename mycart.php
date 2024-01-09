<?php
session_start();
//error_reporting(0);



$connection = mysqli_connect("localhost", "root", "", "ecommerce");
$sql1=mysqli_query($connection, "SELECT * FROM goods ");
	while ($row = mysqli_fetch_array($sql1))
	
	{
		
		$name=$row["name"];
		$price=$row["price"];
		$goods=$row["goods"];
		$picture=$row["picture"];
		$id=$row["id"];

	}




?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>My Cart </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
 
  
</head>

  <body >


 <div class="jumbotron" style="height:5px; margin-top:-35px;">
 
  <div class=" bg-info text-white" style="margin-top:30px;" ><marquee direction="right" style="background :; color:white;margin-left:113px; padding-right:100px;  width:1140px;">
	  ONLINE SMART CONTROL MANAGEMENT SYSTEM DESIGN BY GADDAFI YUSUF BABA REGNO--KPT/CST/16/11315  
</marquee></div>

 
 </div>
  <div class=" container-fluid">
      <div class="row-sm-12"> 
     
      
        <nav class="navbar navbar-expand-lg navbar-dark text-white fixed-top  bg-info mb-5  " color-on-scroll="400" style="background-color:; ">
               <button class="navbar-toggler btn btn-success" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
    <span class="navbar-toggler-icon "></span>

  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
  
    



  
    <ul class="navbar-nav  d-inline-sm-12 " style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
     
      
       <li class="nav-item active text-white" style="color:#FFF; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">
        <a class="nav-link text-uppercase  text-white" href="#"> Online Transaction System |</a>
      </li>
      
      <li class="nav-item active text-white" style="color:#FFF; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">
        <a class="nav-link  text-white" href="userpage.php"> Home</a>
      </li>
      
     
    </ul>
     <ul class="navbar-nav  d-inline-sm-12 ml-auto " style="font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;">
     
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

<div class="row mb-4 table-bordered"  style="margin-top:-30px;">



  <?php include('usersidebar.php'); ?>

 

 

<div class=" table-bordered" style="padding-left:0px; padding-right:0px; border-radius:10px; margin-left:5px; height:500px; width:953px;">
<div class=" text-white text-center table-bordered col-12 mb-2 bg-info" style="background-color:; height:40px; border-top-left-radius:10px; border-top-right-radius:10px; font-size:26px; margin-left:px;"> My Cart</div>

 <table class="text-white w-100 table-hover table-striped " style="font-size:12px; margin-left:1px; background-color:#eee;" >
         <tr class="bg-dark text-center">

         <th>NAME</th>
         <th>PRICE</th>
         <th>QUANTITY</th>
         <th>AMOUNT</th>
         <th>DATE ADDED</th>
         <th>BUY</th>
        
         </tr>
         
         <?php




 $connection = mysqli_connect("localhost","root","","ecommerce");
	  $query = mysqli_query($connection, "SELECT * FROM cart WHERE email='".$_SESSION['email']."'");
	 
	  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
		 
		 
		 
	 	$row["status"]==0;
	if($row["status"]==1)
	{
		
	 $result="<b class=' text-white bg-success ' style='font-size:14px;'>RECEIVED</b>";
		
	}else{
		
	 $result="<b class=' text-dark   bg-warning' >NOT RECEIVED</b>";

	}



	?>
	<tr class="text-dark text-center mb-2">

    <td><?php echo $row["name"]; ?></td>
	 <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["quantity"]; ?></td>
    <td><b style="text-decoration:line-through">N</b><?php echo  $row["amount"]; ?></td>
    <td><?php echo $row["date"]; ?></td>

  
    <td><a class="btn btn-info btn-sm fa fa-money" href="buy1.php?id=<?php echo $row["id"]; ?>" > BUY</a></td>
    
    </tr>

  <?php
      }  
	  
	    
   ?>  
   
       
         </table>



</div>



</div>


</div>
    <footer class="footer text-center text-light fixed-bottom  w-100 mb-0 bg-dark" style="background-color:  ; width: 100%; height:40px; font-size:18px;">

    <p style="margin-top:10px;">&copy 2019 e-commerce, Designed by . </b></p>
   
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
  
