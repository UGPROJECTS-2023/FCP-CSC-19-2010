<?php

$id=$_GET['id']; 
	
	$connection=mysqli_connect("localhost", "root", "", "ecommerce");
	$sql=mysqli_query($connection, "SELECT * FROM goods WHERE id='$id'");
	
	while ($row = mysqli_fetch_array($sql))
	{
		
        	$name=$row["name"]; 
			$price=$row["price"]; 
			$goods=$row["goods"]; 
			$picture=$row["picture"]; 
			$id=$row["id"]; 
            
            
            
            
        



if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["img"]["tmp_name"],"images/" . $_FILES["img"]["name"]);			
$location=$_FILES["img"]["name"];
$price=$_POST['price'];
$goods=$_POST['goods'];
$name=$_POST['name'];


$connection = mysqli_connect("localhost", "root", "", "ecommerce");
//$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = mysqli_query($connection, "UPDATE goods SET name='$name', picture='$location',  goods='$goods' WHERE id='$id'");


echo "<script>alert('Successfully Updated!!!'); window.location='editgoods.php'</script>";
// }
}
// }

}

?>

<?php
	
            
            ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Edit Goods </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
 
  
</head>

  <body>


 <div class="jumbotron" style="height:5px; margin-top:-35px;">
 
  <div class=" bg-info text-white" style="margin-top:30px;" ><marquee direction="right" style="background :; color:white;margin-left:113px; padding-right:100px;  width:1140px;">
	  ONLINE TRANSACTION MANAGEMENT SYSTEM DESIGN BY ABUBAKAR SABO NADABO REGNO--KPT/CST/16/11366  
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

<div class="row">
<div class="col-sm-12 table-bordered border-white " style="border-radius:10px; height:500px; margin-top:-35px; background-color:; padding-left:0px; padding-right:0px;">
<div class=" text-white text-center mb-5 bg-info" style="background-color:; height:40px; border-top-left-radius:10px; border-top-right-radius:10px; font-size:26px;"> EDIT GOODS</div>
<div class="row">
 <?php include('sidebar.php'); ?>

<div class="col-7 table-bordered   " style="margin-left:30px; margin-top:-30px; border-radius:10px;">

  <div class="col-12 offset-2"><p></p>
    <form action=""  method="post" enctype="multipart/form-data">                 

<div class="form-group">
<label class="col-sm-6 control-label"> Name</label>
<div class="col-sm-8">
<input type="text" name="name"   class="form-control" value="<?php echo $name; ?>" >
</div>
</div>
                          


  <div class="form-group">
<label class="col-sm-6  control-label"> Price</label>
<div class="col-sm-8">
<input type="text" name="price"  class="form-control" value="<?php echo $price; ?>" >
</div>
</div>

<div class="form-group ">
<label class="col-sm-6 control-label"> Available Goods </label>
<div class="col-sm-8">
<input type="text" name="goods"  class="form-control" value="<?php echo $goods; ?>" >
</div>
</div>

<div class="form-group">
<label class="col-sm-6 control-label"> Picture</label>
<div class="col-sm-8">
<input type="file" name="img"   class="form-control" value="<?php echo $picture; ?>" >
</div>
</div>


<div class="col-sm-6 mb-2 col-sm-offset-4">

<input type="submit" name="submit" Value="Submit" class="btn btn-info">
</div>
</form>
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
  
