<?php
 session_start();
 include'config/db.php';

 $product = $_GET['id'];
 $_SESSION['product'] = $product;







// foreach ($add as $key => $addd) {


 

// $sql = mysqli_query($connection,"INSERT INTO sales (stock_id, quantity1, amount, total, transaction_id) VALUES('$add[$key]','$quantity[$key]', '$amount', '$total[$key]', '".$_SESSION['transaction']."')");


//  $query = mysqli_query($connection, " SELECT * FROM stock 
//   LEFT JOIN sales on sales.stock_id = stock.stock_id WHERE stock.stock_id='$addd'");

//  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

//       $q=$row["quantity"];
//       $qq=$row["quantity1"];
//       $_SESSION['qua']=$q-$qq;

//     }


//  $query = mysqli_query($connection, "UPDATE stock SET quantity='".$_SESSION['qua']."' WHERE stock_id='$addd'");
    
 
// echo "<script> window.location=''</script>";
 
//  }

?>
<!DOCTYPE html>
<html>
<head>
 <?php include('admin_header.php'); ?>
 <style type="text/css">
   .field{
    width: 100px;
   }
   .boder{
    border: none;
   }
   .msg{
    display: none;
   }
 </style>
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
            
            <!-- /.box-header -->
            <!-- form start -->
             <div>
                 <?php

        // if(isset($_POST['done'])){
            
        //     $search=$_POST['search'];

            ?>
            
               
              </div>
              <!-- /.box-body -->
              <div class="box-header bg-info with-border text-center">
              <span class="fa fa-check-circle"></span> <b>USED MATERIALS</b>
            </div>
            

              <table id="example1" class="table table-bordered table-responsive-sm table-striped">
                <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Quanty used</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     <?php
            

          require_once('config/db.php');

             

    $query = mysqli_query($connection, "SELECT DISTINCT stock_name, sum(quantity1) FROM used WHERE product_id='$product'");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
     
  ?>
                <tr>
                  <td><?php echo $row["stock_name"]; ?></td>
                  <td><?php echo $row["sum(quantity1)"]; ?></td>

                <!--      <td align="center"><a href="delete_used.php?id=<?php echo $row['used_id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn  btn-sm btn-danger fa  fa-trash fa-sm" ><strong style="font-size: 12px;"> Delete</strong></a></td> -->

                  
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
          <!-- /.box -->

    </section>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>

</body>
</html>
