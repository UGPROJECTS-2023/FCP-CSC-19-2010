 <?php

                  session_start();
                  require_once('config/db.php');
          

                  if (isset($_POST['submit'])) {

                   /* $_SESSION['quantity']=$_POST['quantity'];
                     $_SESSION['quan']=$quantity;
                     $_SESSION['name']=$name;
                     $_SESSION['outlet_id']=$outlet_id;
                     $_SESSION['manager']=$manager;
                     $_SESSION['outlet_name']=$outlet_name;
                     $_SESSION['address']=$address;
                     $_SESSION['phone']=$phone;
                     $_SESSION['outlet_stock']=$id;
                     $_SESSION['amount']=$amount*$_SESSION['quantity'];
                  */

                      $query = mysqli_query($connection, " SELECT * FROM outlet_stock WHERE outlet_stock_id='".$_SESSION['stock_id']."'");

 while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

      $q=$row["quantity"];
     $new_quan=$q+$_SESSION['quantity'];

    }

    $query = mysqli_query($connection, "UPDATE outlet_stock SET quantity='$new_quan' WHERE outlet_stock_id='".$_SESSION['stock_id']."'");





                  echo "<script> window.location='pay_invoive.php'</script>";
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
     <div class="col-md-12">
          <!-- general form elements -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title"><span class="fa fa-money"></span> Confirm Payment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
              <form class="" action="" method="post">
                <div class="form-group col-md-5 col-sm-offset-3">
                  <label>Enter one time password</label>
                  <input type="number" name="quantity" class="form-control" placeholder="OTP" required>
                </div>

                 <div class="form-group col-md-5 col-sm-offset-3"> <span class="table table-bordered" style="border: 3px gray; height: 40px !important; padding-bottom:  "> <label>Enter the OTP sent to your phone</label></span>
                  <button class="btn btn-xs btn-primary pull-right" type="submit" name="submit"> <span class="fa fa-money"></span> Submit</button>
                </div>
                
              </form>

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
