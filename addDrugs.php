<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

$name=$_POST['name'];
$brand=$_POST['brand'];
$quantity=$_POST['quantity'];
$amount=$_POST['amount'];




 
$sql = mysqli_query($connection,"INSERT INTO drugs(drug_name,brand,quantity,amount) VALUES('$name','$brand','$quantity','$amount')");
 
echo "<script>alert('Successfully Added!!!'); window.location='addDrugs.php'</script>";
 
 
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
              <h3 class="box-title">        Add Drugs / Medical Equipment </h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post">
              <div class="box-body">
                <div class="form-group col-md-4">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                 
                 <div class="form-group col-md-4">
                  <label >Brand</label>
                  <input type="text" class="form-control" name="brand" placeholder=" Brand">
                </div>
                 <div class="form-group col-md-4">
                  <label >Quantity</label>
                  <input type="Number" class="form-control prc" name="quantity" placeholder=" Quantity">
                </div>
                 <div class="form-group col-md-4 mb-3">
                  <label >Amount</label>
                  <input type="number" class="form-control prc" name="amount" placeholder=" Amount">
                </div>
            

                <div class="form-group col-md-6 col-sm-offset-3">
                      <button type="submit" name="submit" class="btn btn- form-control" style="background-color: #C43F00 !important; color: white;">Submit</button>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                Add Drugs / Medical Equipment 
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
