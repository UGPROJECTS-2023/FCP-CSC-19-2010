<?php
 session_start();
 include'config/db.php';

 $material = $_GET['id'];
 $_SESSION['material'] = $material;

if (isset($_POST['add'] ) ){

$quantity=$_POST['quantity1'];
$name=$_POST['stock_name'];
$product=$_POST['product'];


$sql = mysqli_query($connection,"INSERT INTO used (stock_id,quantity1,stock_name,product_id) VALUES('$material','$quantity', '$name','$product')");  
 
 $query = mysqli_query($connection, " SELECT * FROM stock 
  LEFT JOIN used on used.stock_id = stock.stock_id WHERE stock.stock_id='$material'");

 while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

      $q=$row["quantity"];
      $qq=$row["quantity1"];
      $_SESSION['qua']=$q-$qq;

    }


 $query = mysqli_query($connection, "UPDATE stock SET quantity='".$_SESSION['qua']."' WHERE stock_id='$material'");
    
 
echo "<script> window.location=''</script>";
 


?>
   <script>
      setTimeout(() => document.getElementById('msg').style.display = "block", 3000);
        document.getElementById('msg').style.display = "none";
  </script>

<?php


               
}
               $query2 = mysqli_query($connection, "SELECT * FROM stock WHERE stock_id='$material'");
                 while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

                    $material_name = $row["name"];
                    $caterory = $row["stock_type"];
                    $price = $row["price_per_product"];
                    $amount = $row["total_price"];
                    $qtt = $row["quantity"];
                    $product_id = $row["product_id"];


                 }





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
            <table class="table table-striped">
                   <thead>
                   <tr class="bg-info">
                     <th width="250">Item</th>
                     <th width="200">Category</th>
                     <th width="150">Price</th>
                     <th width="150">Quantity</th>
                
                   </tr>

                 </thead>
                  <?php

                  ?>
                   <form role="form" action="" method="post">
                 <tbody>
                   <tr>
                     <td  width="250"><input type="text" name="name" value="<?php echo $material_name; ?>"  class="form-control" readonly></td>
                     <td  width="250"><select name="caterory" class="form-control">
                       <option><?php echo $caterory; ?></option>
                     </select></td>
                     <td><input type="text" id="num1" name="amount" readonly  class="form-control" value="<?php echo $price;?>"></td>
                     <td><input type="number" id="num2" name="quantity" value="<?php echo $qtt;?>"  class="form-control" class="field" readonly></td>
                     
                   </tr>
                 </tbody>
                 </form>

                 <?php
               // }}
                 ?>
               </table>
                  <div class="col-md-6 col-sm-offset-2 alert alert-success text-center msg" id="msg" >
                    Successfully Added
                  </div>
             </div>
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-12">
                  <div class="row">

                    <div class="col-md-12">
                 <table class="table table-striped">
                   <thead>
                   <tr class="bg-info">
                     <th>Item</th>
                     <th>Quantity</th>
                     <td>Action</td>
                   </tr>

                 </thead>
                  <?php

                  ?>

                 <tbody>
                   <tr>
                     <td><input type="text" name="stock_name"  value="<?php echo $material_name; ?>"   class="form-control"></td>
                    <input type="hidden" name="product"  value="<?php echo $product_id; ?>"   class="form-control">
                     <td><input type="text" id="num2" name="quantity1" class="field form-control" width="250"></td>
                     <td><button class="btn btn-primary btn-xs form-control" type="submit" name="add" id="add">Use Material</button></td>
                   </tr>
                 </tbody>
                 </form>

                 <?php
               // }}
                 ?>
               </table>

                </div>
             

              </div>
            </div>
               
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
         <!--          <th>Action</th> -->
                </tr>
                </thead>
                <tbody>
                     <?php
            

          require_once('config/db.php');

             

    $query = mysqli_query($connection, "SELECT DISTINCT stock_name, sum(quantity1) FROM used");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
     
  ?>
                <tr>
                  <td><?php echo $row["stock_name"]; ?></td>
                  <td><?php echo $row["sum(quantity1)"]; ?></td>

                  <!--    <td align="center"><a href="delete_used.php?id=<?php echo $row['used_id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn  btn-sm btn-danger fa  fa-trash fa-sm" ><strong style="font-size: 12px;"> Delete</strong></a></td> -->

                  
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
