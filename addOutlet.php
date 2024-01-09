<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);      
$location=$_FILES["pic"]["name"];
$name=$_POST['name'];
$manager=$_POST['manager'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$email=$_POST['email'];
$password=$_POST['password'];  



 
$sql = mysqli_query($connection,"INSERT INTO outlets(name,manager,gender,address,phone,email,password,picture) VALUES('$name','$manager','$gender','$address','$phone','$email','$password','$location')");  
 
echo "<script>alert('Successfully Added!!!'); window.location='addOutlet.php'</script>";
 
 
}
?>

<!DOCTYPE html>
<html>
<head>
 <?php include('admin_header.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include("admin_nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("sidebar.php"); ?>
  
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
     <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Outlet</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-4">
                  <label >Outlet Name</label>
                  <input type="text" class="form-control" name="name" placeholder=" Outlet Name">
                </div>
                 <div class="form-group col-md-4">
                  <label >Manager Name</label>
                  <input type="text" class="form-control" name="manager" placeholder=" Manager Name">
                </div>
                 <div class="form-group col-md-4">
                  <label >Gender</label>
                  <input type="text" class="form-control" name="gender" placeholder=" Gender">
                </div>
                 <div class="form-group col-md-4">
                  <label >Address</label>
                  <input type="text" class="form-control" name="address" placeholder=" Address">
                </div>
                 <div class="form-group col-md-4">
                  <label >Phone Number</label>
                  <input type="number" class="form-control" name="phone" placeholder=" Phone Number">
                </div>
                <div class="form-group col-md-4">
                  <label>Email address</label>
                  <input type="email" class="form-control" name="email" placeholder=" email">
                </div>
                <div class="form-group col-md-4">
                  <label >Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-group col-md-4">
                  <label >Picture</label>
                  <input type="file" name="pic">
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="submit" class="btn btn-primary col-md-4 offset-sm-2">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
