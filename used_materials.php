<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

$_SESSION['transaction']=rand();
 



 
/*$sql = mysqli_query($connection,"INSERT INTO sales(transaction_id) VALUES('".$_SESSION['transaction']."')");  */
 
echo "<script>window.location='generate_invoice.php'</script>";
 
 
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
            <div class="box-header bg-info with-border text-center">
              <span class="fa fa-check-circle"></span>
              <h3 class="box-title">Available Products</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             
                <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-12">
                  <div class="row">
                      <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive-sm table-striped">
                <thead>
                <tr>
                  <th>S/N</th>
                  <th>Product Name</th>
                  <th>Description</th>
    <!--               <th>Action</th> -->
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     <?php
            

          require_once('config/db.php');

             
          $counter = 1;
    $query = mysqli_query($connection, "SELECT * FROM product");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
     
  ?>
                <tr>
                  <td><?php echo $counter++; ?></td>
                  <td><?php echo $row["product_name"]; ?></td>
                  <td><?php echo $row["description"]; ?></td>

                   <!--   <td align="center"><a href="delete_product.php?id=<?php echo $row['product_id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn  btn-sm btn-danger fa  fa-trash fa-sm" ><strong style="font-size: 12px;"> Delete</strong></a></td> -->

                    <td align="center"><a href="used.php?id=<?php echo $row['product_id']; ?>"  class="btn  btn-sm btn-primary fa  fa-check-circle fa-sm" ><strong style="font-size: 12px;"> View Used Materials</strong></a></td>

                  

                </tr>
                <?php
                  }
                ?>
               
                </tbody>
                <!-- <tfoot>
                <tr>
                <th>Product Name</th>
                  <th>Description</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
               
</form>
              </div>
            </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                Product Report
              </div>
        
          </div>
          <!-- /.box -->

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
