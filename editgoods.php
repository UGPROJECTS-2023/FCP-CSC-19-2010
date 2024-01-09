<?php


if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["img"]["tmp_name"],"images/" . $_FILES["img"]["name"]);			
$location=$_FILES["img"]["name"];
$price=$_POST['price'];
$goods=$_POST['goods'];


$connection = mysqli_connect("localhost", "root", "", "ecommerce");
//$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = mysqli_query($connection, "INSERT INTO goods (picture, price, goods)
VALUES ('$location', '$price','$goods')");


echo "<script>alert('Successfully Added!!!'); window.location='goods.php'</script>";
// }
}
// }



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Modification </title>
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

<div class="row"  style="margin-top:-30px;">
<div class="col-sm-12 table-bordered border-white " style="border-radius:10px; height:0px; margin-top:0px; background-color:; padding-left:0px; padding-right:0px;">
<div class=" text-white text-center mb-5 bg-info" style="background-color:; height:40px; border-top-left-radius:10px; border-top-right-radius:10px; font-size:26px;"> EDIT/DELETE GOODS</div>
<div class="row">
 <?php include('sidebar.php'); ?>

<div class="col-7 table-bordered mb-5   " style="margin-left:30px; margin-top:-30px; border-radius:10px;">


<table class=" table-hover table-striped w-100" style="border-radius:8px; font-size:14px" >

<tr class="bg-dark text-white" >
	<th>NAME</th>
    <th>PRICE</th>
    <th>AVAILABILITY</th>
    <th>PICTURE</th>
    <th>EDIT</th>
    <th>DELETE</th>
</tr>

<?php
	 
	
	$connection=mysqli_connect("localhost", "root", "", "ecommerce");
	$sql=mysqli_query($connection, "SELECT * FROM goods");
	
	while ($row = mysqli_fetch_array($sql))
	{
		?>
        <tr>
        	<td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["price"]; ?></td>
            <td><?php echo $row["goods"]; ?></td>
            <td><?php echo $row["picture"]; ?></td>
           
         <td align="center"> <a  class="btn btn-primary btn-sm" href="edit.php?id=<?php echo $row['id']; ?>" onclick= "return confirm('Are You sure Want to edit')" class="btn btn-success fa fa-pencil" > <strong>Edit</strong></a> </td>
          <td align="center" height="35"> <a href="confirm.php?id=<?php echo $row['id']; ?>" onclick= "return confirm('Are You sure Want to delete')" class="btn btn-danger btn-sm fa  fa-trash-o" ><strong> Delete</strong></a> </td> </tr>
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
  
