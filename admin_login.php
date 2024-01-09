<?php
include 'config/db.php';
$msg="";
session_start();

if(isset($_POST['submit'])){

$_SESSION['username'] = $_POST['username'];
$password = $_POST['password'];


if($_SESSION['username']&&$password){
  
  
  
 
  $sql= mysqli_query($connection,"SELECT * FROM users WHERE username='".$_SESSION['username']."'");
  
  $numrows=(mysqli_num_rows($sql));
  
  if($numrows !=0)
  {
    
    while($row=mysqli_fetch_array($sql))
    {
      
    $dbuser=$row["username"];
    $dbpass=$row["password"];
      
    }
    
    if($_SESSION['username']==$dbuser)
    {
      
      if($password==$dbpass)
      {

        header("location: adminpage.php");
 
        
      }else{
        
        $msg="<p class='alert alert-danger text-center'>Incorrect password</p>";
      
      }
      
      
    }else{
      
      $msg="<p class='alert alert-danger text-center'>Incorrect Username</p>";
      
      }
  }else {

      $msg="<p class='alert alert-danger text-center'>Incorrect username or password</p>"; 
      
    
  }
  
  
}
}
?>
<!DOCTYPE html>
<html>
<head>
<?php include('admin_header.php'); ?>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

<?php include('index_nav.php'); ?>
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Content Header (Page header) -->
    
      <!-- Main content -->
      <section class="container-fluid mb-2" style="margin-top: 100px;">
        <div class="col-sm-4 col-sm-offset-4">
           <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Login</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Password" required>
                </div>
               
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
                 <div class="form-group">
                    <button type="submit" name="submit" class="btn btn- form-control" style="background-color: #C43F00 !important; color: white;">Submit</button>
                </div>
                <?php echo $msg; ?>
              </div>
              <!-- /.box-body -->
                <div class="box-footer">
                    <a class="d-block small col-sm-offset-4" href="forgot-password.html">Forgot Password?</a>
              </div>
            </form>
          </div>
          <!-- /.box -->
        </div>
      </section>

      

      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('index_foot.php'); ?>
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
