<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Payment Report </title>
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
	ONLINE TRANSACTION SYSTEM DESIGN BY  REGNO--KPT/CST/16/  
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
<div class=" text-white text-center mb-5 bg-info" style="background-color:; height:40px; border-top-left-radius:10px; border-top-right-radius:10px; font-size:26px;"> PAYMENT REPORT</div>
<div class="row">
 <?php include('sidebar.php'); ?>

<div class=" table-bordered mb-5   " style="margin-left:5px; margin-top:-45px; border-radius:10px; width:835px;">


 <table class="text-white w-100 table-hover table-striped " style="font-size:11px; margin-left:1px; background-color:#eee;" >
         <tr class="bg-dark text-center">

         <th>NAME</th>
         <th>PRICE</th>
         <th>QUANTITY</th>
         <th>AMOUNT</th>
         <th>PAYMENT DATE</th>
         <th>PAID BY </th>
         <th>EMAIL</th>
         <th>TRANSACTION ID</th>
         <th>STATUS</th>

        
         </tr>
         
         <?php




 $connection = mysqli_connect("localhost","root","","ecommerce");
	  $query = mysqli_query($connection, "SELECT * FROM orders ");
	 
	  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
		  
		  
		  $fname = $row["fname"];
		 $lname = $row["lname"];
		 $oname = $row["oname"];
		 $gender = $row["gender"];
		 $state = $row["state"];
		 $phone = $row["phone"];
		 $lg = $row["lg"];
		 $nationality = $row["nationality"];
		 $email = $row["email"];
		 $address = $row["address"];
		 $password = $row["password"];
		 $next = $row["next"];
		 $marital = $row["marital"];
		 $dob = $row["dob"];
		 $pic = $row["picture"];
		  $name=$row["name"];
		$price=$row["price"];
		$goods=$row["goods"];
		$picture=$row["picture"];
		$id=$row["id"];
		$date=$row["date"];
		$amount=$row["amount"];
		$quantity=$row["quantity"];
		$ref=$row["ref"];
	
		 
		 
		 
	 	$row["status"]==0;
	if($row["status"]==1)
	{
		
	 $result="<b class=' text-white bg-success ' style='font-size:14px;'>RECEIVED</b>";
		
	}else{
		
	 $result="<a href='refund.php?id=".$row["id"]."' class=' btn btn-warning btn-sm' >NOT RECEIVED</a>";

	}



	?>
	<tr class="text-dark text-center mb-2">

    <td><?php echo $row["name"]; ?></td>
	 <td><b style="text-decoration:line-through">N</b><?php echo $row["price"]; ?></td>
      <td><?php echo $row["quantity"]; ?></td>
    <td><b style="text-decoration:line-through">N</b><?php echo $row["amount"]; ?></td>
    <td><?php echo $row["date"]; ?></td>
    <td><?php echo $row["cname"]; ?></td>
    <td><?php echo $row["email"]; ?></td>
    <td><?php echo $row["ref"]; ?></td>
	 <td><?php echo $result; ?></td>
  
  
    </tr>

  <?php
      }  
	  
	    
   ?>  
   
       
         </table>

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
  
