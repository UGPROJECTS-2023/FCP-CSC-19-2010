<!DOCTYPE html>
<html>
<head>
 <?php 
              session_start();

       

 include('admin_header.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include("admin_nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("sidebar.php"); ?>
  
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
     <div class="col-md-12">
          <!-- general form elements -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Outlets Report</h3>
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
                  <th>Customers Price</th>
                  <th>Picture</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     <?php
            

          require_once('config/db.php');

             

    $query = mysqli_query($connection, "SELECT * FROM stock");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
     
  ?>
                <tr>
                  <td><?php echo $row["name"]; ?></td>
                  <td><?php echo $row["stock_type"]; ?></td>
                  <td><?php echo $row["manufacturer"]; ?></td>
                  <td><?php echo $row["quantity"]; ?></td>
                  <td><?php echo $row["price_per_product"]; ?></td>
                  <td><?php echo $row["total_price"]; ?></td>
                  <td><?php echo $row["customers_price"]; ?></td>

                   <td align="center"><a href="images/<?php echo $row['picture']; ?>"  class="btn btn-sm btn-success fa fa-sm  fa-check-circle"  ><strong style="font-size: 12px;"> View Picture</strong></a></td>


                    <td align="center"><a href="view_product.php?id=<?php echo $row['stock_id']; ?>"  class="btn  btn-sm btn-info fa  fa-edit fa-sm" ><strong style="font-size: 12px;"> Edit</strong></a></td>

                    <td align="center"><a href="delete.php?id=<?php echo $row['stock_id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn  btn-sm btn-danger fa  fa-trash fa-sm" ><strong style="font-size: 12px;"> Delete</strong></a></td>

                </tr>
                <?php
                  }
                ?>
               
                </tbody>
                <tfoot>
                <tr>
                <th>Goods Name</th>
                  <th>Type</th>
                  <th>Manufacturer</th>
                  <th>Quantity</th>
                  <th>Product Price</th>
                  <th>Total Price</th>
                  <th>Customers Price</th>
                  <th>Picture</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </tfoot>
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
