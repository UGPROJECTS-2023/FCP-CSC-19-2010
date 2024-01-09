 <?php
                  session_start();
                  require_once('config/db.php');
              


                  if (isset($_POST['submit'])) {
                    $_SESSION['transaction']=rand();


                
                    $sql = mysqli_query($connection,"INSERT INTO payment(transaction_id, outlet_id, outlet_stock_id) VALUES('". $_SESSION['transaction']."', '". $_SESSION['outlet_id']."', '". $_SESSION['outlet_stock']."') ");

                  echo "<script> window.location='payment.php'</script>";
                  }
                 ?>

<!DOCTYPE html>
<html>
<head>
 <?php include('admin_header.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini" style="font-family: time new romans">
<div class="wrapper">

    <?php include("outlet_nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("outlet_sidebar.php"); ?>
  
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
     <div class="col-md-12">
          <!-- general form elements -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Place Order</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
             <div class=" row">
              <div class="col-md-5">

                <label style="font-size: 22px;"><span class="fa fa-user"></span> Outlet Details</label>

               <table class="table table-bordered table-responsive-sm table-striped">

                <thead>
                  <tr>
                    <th>Outlet: </th>
                    <td> <?php echo $_SESSION['outlet_name']; ?></td>
                  </tr>
                   <tr>
                    <th>Manager: </th>
                    <td> <?php echo $_SESSION['manager']; ?></td>
                  </tr>
                   <tr>
                    <th>Address: </th>
                    <td> <?php echo $_SESSION['address']; ?></td>
                  </tr>
                </thead>
                  
                </table>
                
              </div>





                <div class="col-md-5 col-sm-offset-1">
                  <label style="font-size: 22px;"><span class="ion ion-ios-cart-outline"></span> My Order</label>
               <table class="table table-bordered table-responsive-sm table-striped">

                <thead>
                  <tr>
                    <th>Good: </th>
                    <td> <?php echo $_SESSION['name']; ?></td>
                  </tr>
                   <tr>
                    <th>Quantity: </th>
                    <td> <?php echo $_SESSION['quan']; ?></td>
                  </tr>
                   <tr>
                    <th>Amount: </th>
                    <td> <?php echo $_SESSION['amount']; ?></td>
                  </tr>
                </thead>
                  
                </table>
                
              </div>
<form action="" method="post">

              <div class="col-md-4 col-sm-offset-4"> <button class="btn btn-primary form-control" type="submit" name="submit" style="font-size: 18px;"> <span> <b><del>N</del></b><?php echo number_format( $_SESSION['amount']); ?></span>  Order</button></div>
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
