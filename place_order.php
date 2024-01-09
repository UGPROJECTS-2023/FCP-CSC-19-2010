 <?php

                  session_start();
                  require_once('config/db.php');
                  $id=$_GET['id'];
                  $query = mysqli_query($connection, "SELECT * FROM outlet_stock WHERE outlet_stock_id='$id'");
                  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    $quantity = $row["quantity"];
                    $name = $row["name"];
                    $outlet_id = $row["outlet_id"];
                    $amount = $row["price_per_product"];
                    $stock_id = $row["outlet_stock_id"];
                  }

                  $query = mysqli_query($connection, "SELECT * FROM outlets WHERE outlet_id='$outlet_id'");
                  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    $manager = $row["manager"];
                    $outlet_name = $row["name"];
                    $address = $row["address"];
                    $phone = $row["phone"];
                    
                  }

                  if (isset($_POST['submit'])) {

                    $_SESSION['quantity']=$_POST['quantity'];
                     $_SESSION['quan']=$quantity;
                     $_SESSION['name']=$name;
                     $_SESSION['outlet_id']=$outlet_id;
                     $_SESSION['manager']=$manager;
                     $_SESSION['outlet_name']=$outlet_name;
                     $_SESSION['address']=$address;
                     $_SESSION['phone']=$phone;
                     $_SESSION['outlet_stock']=$id;
                     $_SESSION['stock_id']=$stock_id;
                     $_SESSION['amount1']=$amount;
                     $_SESSION['amount']=$amount*$_SESSION['quantity'];
                  



                  echo "<script> window.location='myorder.php'</script>";
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
              <h3 class="box-title">Place Order</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
              <form class="" action="" method="post">
                <div class="form-group col-md-5 col-sm-offset-3">
                  <label>Enter Product Quantity</label>
                  <input type="number" name="quantity" class="form-control">
                </div>

                 <div class="form-group col-md-5 col-sm-offset-3"> <span class="table table-bordered" style="border: 3px gray; height: 40px !important; padding-bottom:  "> <label>Enter Product Quantity</label></span>
                  <button class="btn btn-xs btn-primary pull-right" type="submit" name="submit"> <span class="ion ion-ios-cart-outline"></span> Order</button>
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
