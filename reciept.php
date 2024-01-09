<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

$customer=$_POST['customer'];
 



 
$sql = mysqli_query($connection,"UPDATE sales SET customer='$customer' WHERE transaction_id='".$_SESSION['transaction']."'"); 
 
echo "<script>window.location='invoice.php'</script>";
 
 
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
     <div class="col-md-12" style="margin-top: -20px;">
  <!-- general form elements -->
          <div class="box">
            <div class="box-header bg-info with-border">
              <span class="fa fa-money"></span>
              <h3 class="box-title">Generate Invoice</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             
                <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-5 form-group mb-5 col-md-offset-3">
                      <label>Customer's Name</label>
                      <input type="text" name="customer" class="form-control" placeholder="Customer's Name">
                  
                      </div>
                       <div class="col-md-3 form-group col-md-offset-4">
                      <button type="submit" name="submit" class="btn btn-primary form-control col-md-3  "><span class="fa fa-print"></span> Print Invoice</button>
                      </div>
                    
                    

              </div>
            </div>
               
              </div>
              </form><!-- /.box-body -->

              <div class="box-footer">
                Generate Invoice
              </div>
        
          </div>
          <!-- /.box -->

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
