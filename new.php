<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

$_SESSION['transaction']=rand();
 



 
/*$sql = mysqli_query($connection,"INSERT INTO sales(transaction_id) VALUES('".$_SESSION['transaction']."')");  */
 
echo "<script>window.location='make_transaction.php'</script>";
 
 
}
?>
<!DOCTYPE html>
<html>
<head>
 <?php include('admin_header.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include("outlet_nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("outlet_sidebar.php"); ?>
  
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
                    <div class="col-md-9">
                    
                      
                    </span>

                    <button type="submit" name="submit" class="img-circle bg-primary animated slideInRight col-md-5" style="margin-top: px; height: 120px; margin-left: 300px; font-size: 20px;">Generate Invoice <span class="fa fa-angle-right"></span> <span class="fa fa-angle-right"></span> </button>



                </div>
                <!-- col-md-9 -->
               
</form>
              </div>
            </div>
               
              </div>
              <!-- /.box-body -->

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
