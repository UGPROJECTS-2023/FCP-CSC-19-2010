<?php
session_start();
//error_reporting(0);
$_SESSION['id']=$_GET['id'];


$connection = mysqli_connect("localhost", "root", "", "ecommerce");
$sql1=mysqli_query($connection, "SELECT * FROM cart WHERE id='".$_SESSION['id']."'");
	while ($row = mysqli_fetch_array($sql1))
	
	{
		
		$name=$row["name"];
		$price=$row["price"];
		$goods=$row["goods"];
		$picture=$row["picture"];
		$id=$row["id"];
		$amount=$row["amount"];
		$email=$row["email"];
		$g_id=$row["g_id"];
		$quantity=$row["quantity"];
		

	}
	
$_SESSION['ref']=rand()*rand();
//$amount=$price * $quantity;


if (isset($_POST['submit'])) {

$ctype=$_POST['ctype'];
$cname=$_POST['cname'];
$cno=$_POST['cno'];
$exp=$_POST['exp'];
$cvv=$_POST['cvv'];

		

$connection = mysqli_connect("localhost", "root", "", "ecommerce");

$sql = mysqli_query($connection, "INSERT INTO orders(quantity,name,price,goods,picture,g_id,email,amount,cname,cno,exp,cvv,ref,cardtype) VALUES ('$quantity','$name','$price','$goods','$picture','$g_id','".$_SESSION['email']."','$amount','$cname','$cno','$exp','$cvv','".$_SESSION['ref']."','$ctype')");

	 $query = mysqli_query($connection, "DELETE FROM cart WHERE id='".$_SESSION['id']."'");


echo "<script>alert('Payment Successfully!!!'); window.location='invoice.php'</script>";


}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Payment </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
 
  
</head>

  <body  background="images/background.PNG"style=" background-repeat:no-repeat; background-size:cover;">


 <div class="jumbotron" style="height:5px; margin-top:-35px;">
<div class=" bg-info text-white" style="margin-top:30px;" ><marquee direction="right" style="background :; color:white;margin-left:113px; padding-right:100px;  width:1140px;">
  ONLINE SMART CONTROL MANAGEMENT SYSTEM DESIGN BY GADDAFI YUSUF BABA REGNO--KPT/CST/16/11315  
</marquee></div>

 </div>
  <div class=" container-fluid">
      <div class="row-sm-12"> 
     
      
        <nav class="navbar navbar-expand-lg navbar-dark text-white fixed-top  bg-info  " color-on-scroll="400" style="background-color:; ">
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
      
      <li class="nav-item active text-white" style="color:#FFF; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">
        <a class="nav-link  text-white" href="market.php"> Market Place</a>
      </li>
      
     
      
      <li class="nav-item active text-white" style="color:#FFF; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">
        <a class="nav-link  text-white" href="myorder.php"> My Order</a>
      </li>
      
       <li class="nav-item active text-white" style="color:#FFF; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">
        <a class="nav-link  text-white" href="mycart.php"> My Cart</a>
      </li>
      
        <li class="nav-item active text-white" style="color:#FFF; font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif">
        <a class="nav-link  text-white" href="logout1.php"> Logout</a>
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

<div class="row"  style="margin-top:-30px;">
<div class="col-sm-12    " style="border-radius:10px; height:500px; margin-top:0px; background-color:; padding-left:0px; padding-right:0px;">
<div class=" text-white text-center mb-5 bg-info" style="background-color:; height:0px; border-top-left-radius:10px; border-top-right-radius:10px; font-size:26px;"> </div>
<div class="row"  style="margin-top:px; margin-left:5px;">
 <?php //include('usersidebar.php'); ?>
 
 <div class="  table-bordered border-white  " style="border-radius:10px; height:px; margin-top:-40px; background-color:; padding-left:0px; padding-right:0px; margin-left:210px; width:835px; ">
<div class=" text-white text-center mb-3 bg-info" style="background-color:; height:40px; border-top-left-radius:10px; border-top-right-radius:10px; font-size:26px;"> Payment</div>

<div class=" offset-2 table-bordered  mb-2 col-8" style="border-radius:10px;">       
        <form action="" class="form-group mb-3" method="post">
<p></p>
        <div  class="form-group">
			 <select name="ctype"  size="1"  class=" form-control  col-sm-12 mb-2 " width=""  >
          <option>Card Type</option>
          <option value="Master Card">Master card</option>
          <option value="Visa">Vista</option>
          <option value="Verve">verve</option>
        </select>
     </div>
		<div class="form-group ">
			<input type="text" class="form-control  col-sm-12 mb-3" name="cname" placeholder="Card Name" required>
            </div>
        
        <div class="form-group ">
			<input type="number" class="form-control  col-sm-12 mb-3" name="cno" placeholder="Card Number" required16 maxlength="">
            </div>

            	<div  class="form-group">
			<input  type="month" class="form-control  col-sm-12 mb-3" name="exp" placeholder="Expire Date" required>
     </div>
     
     	<div  class="form-group">
			<input type="number" class="form-control  col-sm-12 mb-3" name="cvv" placeholder="CVV" required maxlength="3">
     </div>
     
     
		<button type="submit"  name="submit" class="btn offset-2 col-8 btn-info text-center  fa   fa-money fa-lg" style="font-size:20px;"> Pay <b style="text-decoration:line-through">N</b><?php echo  $amount; ?></button>
   
		</form>
       
          
      </div>
      
      
      <div class=" offset-1 col-10"> <img src="images/remita.png" class="w-100" height="80">  </div>
 
 </div>
 
 
 


</div>
</div>
    <footer class="footer text-center text-light fixed-bottom  w-100 mb-0 bg-info" style="background-color:  ; width: 100%; height:40px; font-size:18px;">

    <p style="margin-top:10px;">
    <a href="http://www.google.com"><i class="fa  fa-android    text-white"></i></a>
    <a href="http://www.tweeter.com"><i class="fa fa-twitter   text-white"></i></a>
    <a href="http://www.facebook.com"><i class="fa fa-facebook-square  text-white"></i></a>
    <a href="http://www.instagram.com"><i class="fa  fa-instagram  text-white"></i></a>
    <b>
      &copy 2018 e-commerce. Design By </b></p>
   
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
  
