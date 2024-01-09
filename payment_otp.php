 <?php
                  session_start();
                  require_once('config/db.php');
              


                  if (isset($_POST['submit'])) {

                    $cno=$_POST['cno'];
                    $cname=$_POST['cname'];
                    $exp=$_POST['exp'];
                    $cvv=$_POST['cvv'];
                     
                      $sql = mysqli_query($connection,"UPDATE payment SET cno='$cno', cname='$cname', exp='$exp', cvv='$cvv' WHERE transaction_id='".$_SESSION['transaction']."' AND outlet_id='".$_SESSION['outlet_id']."' ");

                  echo "<script> window.location='payment.php'</script>";
                  }
                 ?>

<!DOCTYPE html>
<html>
<head>
 <?php include('index_header.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini" style="font-family: time new romans">
<div class="wrapper">

    <?php include("outlet_nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("outlet_sidebar.php"); ?>
  
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
     <div class="col-md-10">
          <!-- general form elements -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title"><span class="fa fa-money"></span> Make Payment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
       <form action="" method="post"> 

             <div class="row">

            

                  <div class="form-group col-md-5 col-sm-offset-1">
              <label>One Time Password</label>
              <input type="text" name="cno" class="form-control" placeholder="Card Name" required>
            </div>

            
                
        

              

      
    <div class="col-sm-offset-1 animated slideInRight"><img src="images/remita.png" class="img-thumbnail " style="width: 700px; height: 90px;"></div>

              <div class="col-md-4 col-sm-offset-4"> <button class="btn btn-primary form-control" type="submit" name="submit" style="font-size: 18px;"> <span> <b><del>N</del></b><?php echo number_format( $_SESSION['amount']); ?></span>  Pay</button></div>
</form>               
             </div>
            <!--  row -->

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- /.box -->

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
