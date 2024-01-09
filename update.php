<?php
 session_start();



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
$sql = mysqli_query($connection,"UPDATE customers SET fname='$fname',lname='$lname',oname='$oname',gender='$gender',marital='$marital',dob='$dob',lg='$lg',state='$state',nationality='$nationality',next='$next',phone='$phone',address='$address',password='$password',picture='$location' WHERE email='".$_SESSION['email']."'");  
 
echo "<script>alert('Successfully Updated!!!')</script>";
 



}

 $connection = mysqli_connect("localhost","root","","ecommerce");
	  $query = mysqli_query($connection, "SELECT * FROM customers where email='".$_SESSION['email']."' ");
	 
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
		 
	  }

  ?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Update Profile </title>
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

<div class="row mb-4 table-bordered"  style="margin-top:-30px; border-radius:10px;">



  <?php include('usersidebar.php'); ?>

 

 

<div class=" table-bordered" style="padding-left:0px; border-radius:10px; padding-right:0px; border-radius:10px; margin-left:5px;  height:500px; width:953px;">
<div class=" text-white text-center table-bordered col-12 mb-2 bg-info" style="background-color:; height:40px; border-top-left-radius:10px; border-top-right-radius:10px; font-size:26px; margin-left:px;"> Update Profile</div>

  <div class="col-sm-12 table-bordered border-white ml-4 mb-4  " style="border-radius:10px; border:3px solid; right:20px;" >
        
        <form  class="form-group " action=""  enctype="multipart/form-data" method="post" style="margin-top:15px;">
     <div class="row " > 
    	 <div  class="form-group col-sm-4  text-white">
		
			<input type="text" class="form-control  col-sm-12" name="fname" value="<?php echo $fname; ?>" placeholder="Firstname" required>
			</div>
            
            <div  class="form-group col-sm-4 text-white">
		
			<input type="text" class="form-control  col-sm-12" name="lname" value="<?php echo $lname; ?>" placeholder="Lastname" >
			</div>
            
            
            	<div  class="form-group col-sm-4 text-white">
              
			<input type="text" class="form-control col-sm-12 mb-3" name="oname" value="<?php echo $oname; ?>" placeholder=" Othername">
     </div>
            
            	 <div  class="form-group col-sm-4 text-white">
               
             	
			 <select name="gender"  size="1"   class=" form-control  col-sm-12 " width="" >
          <option value="<?php echo $gender; ?>">Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
         
        </select>
     </div>
     
    
     
      <div  class="form-group col-sm-4 text-white">
              
             	
			 <select name="marital"  size="1"  class=" form-control  col-sm-12 " width=""  >
          <option value="<?php echo $marital; ?>">Marital Status</option>
          <option value="married">Married</option>
          <option value="single">Single</option>
         
        </select>
     </div>
     
     <div  class="form-group col-sm-4 text-white">
		
			<input type="text" class="form-control  col-sm-12" name="dob" value="<?php echo $dob; ?>" placeholder="Date of Birth" >
			</div>
            
           
            
            <div  class="form-group col-sm-4 text-white">
		
			<input type="text" class="form-control  col-sm-12" name="lg" value="<?php echo $lg; ?>" placeholder="Local Government" >
			</div>
            
              <div  class="form-group col-sm-4 text-white">
              <select name="state"  size="1"  class=" form-control  col-sm-12 " width=""  >
          <option value="<?php echo $state; ?>">State</option>
              
              <?php $connection = mysqli_connect("localhost", "root", "", "kedco"); 
			  
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
          <option value="<?php echo $nationality; ?>">Nationality</option>
          <option value="married">Nigerian</option>
        
         
        </select>
     </div>
     
       <div  class="form-group col-sm-4 text-white">
			
			<input type="text" class="form-control  col-sm-12" name="next" value="<?php echo $next; ?>" placeholder="Next of Kin" >
			</div>
            
              <div  class="form-group col-sm-4 text-white">

			<input type="text" class="form-control  col-sm-12" name="phone" value="<?php echo $phone; ?>" placeholder="Phone No." >
			</div>
            
               <div  class="form-group col-sm-4 text-white">

			<input type="text" class="form-control  col-sm-12" name="email" value="<?php echo $email; ?>" placeholder="Email" readonly >
			</div>
            
              <div  class="form-group col-sm-4 text-white">
		
			<input type="text" class="form-control  col-sm-12" name="address" value="<?php echo $address; ?>" placeholder="Address" >
			</div>
            
             <div  class="form-group col-sm-4 text-white">
		
			<input type="password" class="form-control  col-sm-12"  name="password" value="<?php echo $password; ?>" placeholder="Create Password" >
			</div>
            
          
            
              <div  class="form-group col-sm-2 text-white">
            
			
			<input  type="file" class="form-control  col-sm-12" value="<?php echo $pic; ?>" name="pic"   >
			</div>
            
                <div  class="form-group col-sm-4 offset-1 mb-0 text-white">
            
		<button   type="submit"  name="done"  class="btn   w-50 btn-info text-center  fa  fa-edit ml-4" style="  height:40px; border-radius:7px;"> Update</button>
        </div>
        <div class="col-4 offset-9" style="margin-right:-250px;" > <img src="images/<?php echo $pic; ?>" width="150" height="100" style=""></div>
        </div>
        </form>
        
        </div>
        



</div>



</div>


</div>
    <footer class="footer text-center text-light fixed-bottom  w-100 mb-0 bg-info" style="background-color:  ; width: 100%; height:40px; font-size:18px;">

    <p style="margin-top:10px;">&copy 2018 e-commerce, Designed by Abubakar Sabo Nadabo. </b></p>
   
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
  
