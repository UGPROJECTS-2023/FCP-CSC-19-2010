<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Available Good</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
 
  
</head>

  <body  background=""style=" background-repeat:no-repeat; background-size:cover;">


 <div class="jumbotron" style="height:5px; margin-top:-35px;"></div>
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
        <a class="nav-link  text-white" href="index.php"> Home</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link   text-white" href="register.php"> Register</a>
      </li>
       
         
      <li class="nav-item">
        <a class="nav-link  text-white"  href=" login.php"> Login</a>
      </li>

  		<li class="nav-item">
        <a class="nav-link  text-white" href="goodlist.php"> Available Goods</a>
      </li>

	  
     




      <li class="nav-item">
        <a class="nav-link  text-white" href="complain.php"> Contact</a>
      </li>
       <li class="nav-item">
        <a class="nav-link   text-white" href="about.php"> About Us</a>
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

<div class="row">
<div class="col table-bordered border-white mb-5" style="border-radius:10px; width:800px; margin-top:-25px; background-color:; padding-left:0px; padding-right:0px;">
<div class=" text-white text-center mb-5 bg-info" style="background-color:; height:40px; border-top-left-radius:10px; border-top-right-radius:10px; font-size:26px;"> Available Goods</div>
<div class="row" style="padding-left:10px; padding-right:10px;">
<?php
	 
	
	$connection=mysqli_connect("localhost", "root", "", "ecommerce");
	$sql=mysqli_query($connection, "SELECT * FROM goods");
	
	while ($row = mysqli_fetch_array($sql))
	{
		?>
        
        <div class=" mb-5 table-bordered  ml-4  " style=" padding-left:0px; padding-right:0px; margin-left:20px; margin-right:0px; margin-top:-30px; width:220px;" >
        <div class=" bg-info text-center text-white" style="width:220px; font-size:20px; height:30px;"><?php echo $row["name"]; ?></div>
         <img  width='220'   height='250px' style='border:0px solid #333333;' src='images/<?php echo $row["picture"]; ?>'/>
         <hr>
         <div class="col  mb-2" style="width:280; margin-right:px;" >
        <txt class="text-left   text-dark  " style="width:380px; font-size:13px;" >Price: <txt class=" table-bordered" style=" border-radius:2px; "><?php echo $row["price"]; ?></txt><span class=" text-right" style="float:right; font-size:12px;">Available Goods: <txt class=" table-bordered" style=" border-radius:2px;"><?php echo $row["goods"]; ?></txt></span></txt>
         </div>
           <div class="col " style="width:280">
           
           <a href="login.php" class="btn btn-info  mb-2">Buy</a> <a href="login.php" class=" btn btn-info  text-left " style="float:right; font-size:14px; ;" >Add Cart</a>
           
           </div>
         </div> &nbsp;
         
      
         
        <?php
		
	}
		
		
		?>

 
</div>
</div>
</div>
    <footer class="footer text-center text-light fixed-bottom  bg-info w-100 mb-0" style="background-color:  ; width: 100%; height:40px; font-size:18px;">

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
  
