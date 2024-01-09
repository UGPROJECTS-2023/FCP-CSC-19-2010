<?php
 session_start();
 include('config/db.php');
error_reporting(0);

if (isset($_POST['done'])) {

move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);			
$location=$_FILES["pic"]["name"];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$oname=$_POST['oname'];
$gender=$_POST['gender'];
$state=$_POST['state'];
$marital=$_POST['marital'];
$dob=$_POST['dob'];
$lg=$_POST['lg'];  
$nationality=$_POST['nationality'];
$next=$_POST['next'];
$phone=$_POST['phone'];
$_SESSION['email']=$_POST['email'];
$address=$_POST['address'];
$password=$_POST['password']; 



  
 $connection = mysqli_connect("localhost", "root", "", "ecommerce"); 
$sql = mysqli_query($connection,"INSERT INTO customers(fname,lname,oname,gender,marital,dob,lg,state,nationality,next,phone,email,address,password,picture) VALUES('$fname','$lname','$oname','$gender','$marital','$dob','$lg','$state','$nationality','$next','$phone','".$_SESSION['email']."','$address','$password','$location')");  
 
echo "<script>alert('Successfully Registered!!!'); window.location='register.php'</script>";
 
 
 
 
 
 
 
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Customer Registration </title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/fonts.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">
 
  
</head>

  <body>


 <div class="jumbotron" style="height:5px; margin-top:-35px;"></div>
  <div class=" container-fluid">
      <div class="row-sm-12"> 
     
      
        <nav class="navbar navbar-expand-lg navbar-dark text-white fixed-top  bg-info" color-on-scroll="400" style="background-color:; ">
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
        <a class="nav-link   text-white"  data-toggle="modal" data-target="#Modal"  href=""> Admin</a>
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
<div class="col-sm-11   mb-5 table-bordered border-dark" style="margin-left:45px; border-radius:10px;">
<div class="   fa fa-book text-white  fa-1x    text-center col-12 w-100  bg-info  " style=" height:35px; border-radius:10px; background-color:; "><b  class="text-center  " style="font-size:26px; "> Customer Registration Form</b> </div>                                             
    <form  class="form-group  " action=""  enctype="multipart/form-data" method="post" style="margin-top:15px;">
     <div class="row " > 
    	 <div  class="form-group col-sm-4  text-white">
		
			<input type="text" class="form-control  col-sm-12" name="fname" placeholder="Firstname" required>
			</div>
            
            <div  class="form-group col-sm-4 text-white">
		
			<input type="text" class="form-control  col-sm-12" name="lname" placeholder="Lastname" >
			</div>
            
            
            	<div  class="form-group col-sm-4 text-white">
              
			<input type="text" class="form-control col-sm-12 mb-3" name="oname" placeholder=" Othername">
     </div>
            
            	 <div  class="form-group col-sm-4 text-white">
               
             	
			 <select name="gender"  size="1"  class=" form-control  col-sm-12 " width="" >
          <option>Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
         
        </select>
     </div>
     
    
     
      <div  class="form-group col-sm-4 text-white">
              
             	
			 <select name="marital"  size="1"  class=" form-control  col-sm-12 " width=""  >
          <option>Marital Status</option>
          <option value="married">Married</option>
          <option value="single">Single</option>
         
        </select>
     </div>
     
     <div  class="form-group col-sm-4 text-white">
		
			<input type="text" class="form-control  col-sm-12" name="dob" placeholder="Date of Birth" >
			</div>
            
           
            
            <div  class="form-group col-sm-4 text-white">
		
			<input type="text" class="form-control  col-sm-12" name="lg" placeholder="Local Government" >
			</div>
            
              <div  class="form-group col-sm-4 text-white">
              <select name="state"  size="1"  class=" form-control  col-sm-12 " width=""  >
          <option>State</option>
              
              <?php $connection = mysqli_connect("localhost", "root", "", "ecommerce"); 
			  
			  $sql = mysqli_query($connection, "SELECT * FROM states");
			  
			  while($row = mysqli_fetch_array($sql,MYSQLI_ASSOC))
			  
			  {
				  
				  
				  
			
			  
			  
			  ?>
              
             	
			 
          <option value="<?php echo $state=$row["State"]; ?>"><?php echo $state=$row["State"]; ?></option>
        
        
        <?php
		}
		?>
        
        </select>
        
        
     </div>
     
     
       <div  class="form-group col-sm-4 text-white">

             	
			 <select name="nationality"  size="1"  class=" form-control  col-sm-12 " width=""  >
          <option>Nationality</option>
          <option value="married">Nigerian</option>
        
         
        </select>
     </div>
     
       <div  class="form-group col-sm-4 text-white">
			
			<input type="text" class="form-control  col-sm-12" name="next" placeholder="Next of Kin" >
			</div>
            
              <div  class="form-group col-sm-4 text-white">

			<input type="text" class="form-control  col-sm-12" name="phone" placeholder="Phone No." >
			</div>
            
               <div  class="form-group col-sm-4 text-white">

			<input type="text" class="form-control  col-sm-12" name="email" placeholder="Email" >
			</div>
            
              <div  class="form-group col-sm-4 text-white">
		
			<input type="text" class="form-control  col-sm-12" name="address" placeholder="Address" >
			</div>
            
             <div  class="form-group col-sm-4 text-white">
		
			<input type="password" class="form-control  col-sm-12"  name="password" placeholder="Create Password" >
			</div>
            
            
              <div  class="form-group col-sm-4 text-white">
			
			<input  type="file" class="form-control  col-sm-12" name="pic"   >
			</div>
            
                <div  class="form-group col-sm-6 offset-5  text-white" style="margin-top:30px;">
            
		<button    type="submit"  name="done"  class="btn    w-50 btn-info text-center  fa  fa-pencil mb-3" style="  height:40px; border-radius:7px;"> Register</button>
        </div>
        </div></form></div></div>
    <footer class="footer text-center text-light fixed-bottom  w-100 mb-0 bg-info" style="background-color:  ; width: 100%; height:40px; font-size:18px;">

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
  
