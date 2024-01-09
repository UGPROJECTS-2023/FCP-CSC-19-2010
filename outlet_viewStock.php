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
              <h3 class="box-title">Stock Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive-sm table-striped">
                <thead>
                <tr>
                  <th>Goods Name</th>
                  <th>Type</th>
                  <th>Manufacturer</th>
                  <th>Quantity</th>
                  <th>Product Price</th>
                  <th>Total Price</th>
                  <th>Outlet Price</th>
             <!--      <th>Picture</th> -->
                  <th>Action</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     <?php

          require_once('config/db.php');
          $status="";

    $query = mysqli_query($connection, "SELECT * FROM outlet_stock");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

      if ($row["status"]==1) {

        $status="<div class='btn btn-warning btn-xs'> Running out of stock</div>";
        # code...
      }else{
        $status="<div class=' btn-xs'>  </div>";
      }
  ?>
                <tr style="font-size: 12px;">
                  <td><?php echo $row["name"]; ?></td>
                  <td><?php echo $row["stock_type"]; ?></td>
                  <td><?php echo $row["manufacturer"]; ?></td>
                  <td><?php echo $row["quantity"]; ?></td>
                  <td><?php echo $row["price_per_product"]; ?></td>
                  <td><?php echo $row["total_price"]; ?></td>
                  <td><?php echo $row["customer_price_per_product"]; ?></td>

                  <!--  <td align="center"><a href="images/<?php echo $row['picture']; ?>"  class="btn btn-xs btn-success fa fa-sm  fa-check-circle"  ><strong style="font-size: 12px;"> View Picture</strong></a></td> -->

                    <td><?php echo $status; ?></td>


                    <td align="center"><a href="place_order.php?id=<?php echo $row['outlet_stock_id']; ?>"  class="btn   btn-primary btn-xs fa  fa-cart-basket fa-sm" ><strong style="font-size: 12px;"> Place Order</strong></a></td>

                    <td align="center"><a href="delete_stock_outlet.php?id=<?php echo $row['outlet_stock_id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn   btn-danger btn-xs fa  fa-trash fa-sm" ><strong style="font-size: 12px;"> Delete</strong></a></td>

                </tr>
                <?php
                  }
                ?>
               
                </tbody>
               
              </table>
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
