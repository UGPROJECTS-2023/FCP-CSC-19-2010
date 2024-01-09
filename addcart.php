<?php
session_start();
//error_reporting(0);
$_SESSION['id'] = $_GET['id'];


$connection = mysqli_connect("localhost", "root", "", "ecommerce");
$sql1=mysqli_query($connection, "SELECT * FROM goods WHERE id='".$_SESSION['id']."'");
	while ($row = mysqli_fetch_array($sql1))
	
	{
		
		$name=$row["name"];
		$price=$row["price"];
		$goods=$row["goods"];
		$picture=$row["picture"];
		$id=$row["id"];

	}



if (isset($_POST['submit'])) {


$quantity=$_POST['quantity'];
//$card=$_POST['card'];

	$amount=$price * $quantity;	

$connection = mysqli_connect("localhost", "root", "", "ecommerce");

$sql = mysqli_query($connection, "INSERT INTO cart(quantity,name,price,goods,picture,g_id,email,amount) VALUES ('$quantity','$name','$price','$goods','$picture','$id','".$_SESSION['email']."','$amount')");


echo "<script>alert('Successfully Added!!!'); window.location='market.php'</script>";


}
?>



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Add to Cart </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
 
 <script>
function myFunction() {
    var x, text;

    // Get the value of the input field with id="numb"
    x = document.getElementById("numb").value;

    // If x is Not a Number or less than one or greater than 10
    if (isNaN(x) || x < 1 || x > 1000) {
        text = "Input not valid";
    } else {
        text = "Input OK";
    }
    document.getElementById("demo").innerHTML = text;
}
</script>

 
 
  
</head>

  <body  background="images/background.PNG"style=" background-repeat:no-repeat; background-size:cover;">


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
<div class=" table-bordered bg-white mb-4" style="background-image:url(images/background.PNG); background-repeat:no-repeat; background-size:cover; padding-left:0px; padding-right:0px; margin-left:5px; border-radius:10px; margin-top:px; margin-left:px; width:300px; ">
<div class="bg-info text-center text-white " style="border-top-left-radius:7px; border-top-right-radius:7px; height:40px; font-size:24px;"><?php echo $name; ?></div>

<img  width='250'   height='280px' style='border:0px solid #333333; margin-top:10px; border-radius:10px; margin-left:20px;' src='images/<?php echo $picture; ?>'/>

<div class="row " style="margin-left:20px; margin-top:30px;">
<div class=" col-4 bg-info text-white" style="border-radius:10px;">  Price : </div><div class="col-4 bg-info text-white" style="border-radius:10px; left:60px;"><del> N</del><?php echo $price; ?></div>


</div>

<div class="row" style="margin-left:10px; margin-top:30px;">
<div class=" col-6 bg-info text-white" style="border-radius:10px; font-size:15px;"> Available Goods : </div><div class="col-4 bg-info text-white" style="border-radius:10px; left:15px;"><?php echo $goods; ?></div>


</div>




</div>
 

 

<div class="col-9 table-bordered" style="padding-left:0px; padding-right:0px; border-radius:10px; margin-left:10px; height:500px;">
<div class=" text-white text-center table-bordered col-12 mb-5 bg-info" style="background-color:; height:40px; border-top-left-radius:10px; border-top-right-radius:10px; font-size:26px; margin-left:px;"> Add to Cart</div>

 <div class=" offset-3 table-bordered col-6" style="border-radius:10px;">       
        <form action="" class="form-group" method="post">
        <p id="demo"></p>
			<label>Quantity:</label>
			<input  type="number" class="form-control  col-sm-12 mb-4" id="numb" name="quantity" placeholder="Quantity" required>
		
            
     
     
		<button type="submit" onclick="myFunction()"  name="submit" class="btn  btn-info text-center  fa   ">Add Cart</button>
   
		</form>
       
          
      </div>



</div>



</div>


</div>
    <footer class="footer text-center text-light fixed-bottom  w-100 mb-0 bg-info" style="background-color:  ; width: 100%; height:40px; font-size:18px;">

    <p style="margin-top:10px;">&copy 2019 e-commerce, Designed by  </b></p>
   
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
  
