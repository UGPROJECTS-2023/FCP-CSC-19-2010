<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

/*move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);      
$location=$_FILES["pic"]["name"];*/
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$oname=$_POST['oname'];
$username=$_POST['username'];
$password=$_POST['password'];  



 
$sql = mysqli_query($connection,"INSERT INTO users(fname,sname,oname,username,password) VALUES('$fname','$sname','$oname','$username','$password')");  
 
echo "<script>alert('Successfully Added!!!'); window.location='addadmin.php'</script>";
 
 
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
              <h3 class="box-title"> <span class="fa fa-user-plus"></span> Add Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label > First Name</label>
                  <input type="text" required class="form-control" name="fname" placeholder=" First Name">
                </div>
                 <div class="form-group col-md-6">
                  <label>Second Name</label>
                  <input type="text" required class="form-control" name="sname" placeholder=" Second Name">
                </div>
                <div class="form-group col-md-6">
                  <label>Other Name</label>
                  <input type="text"  class="form-control" name="oname" placeholder=" Second Name">
                </div>
                 
                 <div class="form-group col-md-6">
                  <label >Username</label>
                  <input type="text" required class="form-control prc" name="username" placeholder=" Username">
                </div>
                 <div class="form-group col-md-6">
                  <label >Password</label>
                  <input type="password" required class="form-control prc" name="password" placeholder=" Password">
                </div>
                

                <div class="form-group col-md-4 col-sm-offset-4">
                      <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                Fill all fields
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
