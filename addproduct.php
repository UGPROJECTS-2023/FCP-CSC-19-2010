<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

$name=$_POST['name'];
$description=$_POST['description'];  



 
$sql = mysqli_query($connection,"INSERT INTO product(product_name,description) VALUES('$name','$description')");  
 
echo "<script>alert('Successfully Added!!!'); window.location='addproduct.php'</script>";
 
 
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
              <h3 class="box-title">Add Product</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label >Name</label>
                  <input type="text" class="form-control" name="name" placeholder=" Product Name">
                </div>

                 <div class="form-group col-md-6">
                  <label >Description</label>
                  <input type="text" class="form-control" name="description" placeholder=" description">
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
