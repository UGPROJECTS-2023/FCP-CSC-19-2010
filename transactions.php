<?php
 session_start();
 include'config/db.php';

if (isset($_POST['add'] ) ){

$add=$_POST['add'];
$quantity=$_POST['quantity1'];
$amount=$_POST['amount'];
$total=$_POST['total1'];
$sales_type=$_POST['sales_type'];

foreach ($add as $key => $addd) {


 

$sql = mysqli_query($connection,"INSERT INTO sales (stock_id,outlet_id, quantity1, amount, total, sales_type, transaction_id) VALUES('$addd','".$_SESSION['outlet']."','$quantity[$key]', '$amount', '$total[$key]', '$sales_type[$key]','".$_SESSION['transaction']."')");


 $query = mysqli_query($connection, " SELECT * FROM stock 
  LEFT JOIN sales on sales.stock_id = stock.stock_id WHERE stock.stock_id='$addd'");

 while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

      $q=$row["quantity"];
      $qq=$row["quantity1"];
      $_SESSION['qua']=$q-$qq;

    }


 $query = mysqli_query($connection, "UPDATE stock SET quantity='".$_SESSION['qua']."' WHERE stock_id='$addd'");
    
 
echo "<script> window.location=''</script>";
 
 }
}
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
   .h{
    height: 25px;
    width: 110px;
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
   
     
          
           <form action="" method="post"> <!-- general form elements -->
          <div class="box">
            <div class="box-header bg-info with-border">
              <span class="fa fa-money"></span>
              <h3 class="box-title">Generate Invoice</h3>
            
              <span class="col-sm-offset-2">
              <input type="text" name="search" class=""> &nbsp; <button class="btn btn-primary btn-xs" type="submit" name="done">Search</button>
              </span>
              </form>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <div>
                 <?php

        if(isset($_POST['done'])){
            
            $search=$_POST['search'];

            ?>
            <table class="table table-striped">
                   <thead>
                   <tr class="bg-info">
                     <th>Item</th>
                     <th>Price</th>
                     <th>Quantity</th>
                     <th>Total Amount</th>
                     <th>Sales Type</th>
                     <td>Action</td>
                   </tr>
                 </thead>

            <?php
            

               $query2 = mysqli_query($connection, "SELECT * FROM stock WHERE name LIKE '%$search%' OR stock_type LIKE '%$search%' OR manufacturer LIKE '%$search%'");
                 while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

                  ?>
                   <form role="form" action="" method="POST">
                 <tbody>
                   <tr>
                     <td><input type="text" name="name" readonly value="<?php echo $row["name"];?>"></td>
                     <td><input type="text" id="num1" name="amount" class="field" readonly value="<?php echo $row["outlet_price_per_product"];?>"></td>
                     <td><input type="number" id="num2" name="quantity1[]" class="field"></td>
                     <td><input type="number" id="num3" class="field" name="total1[]"></td>
                     <td>
                       <select name="sales_type[]" class="h">
                         <option value="normal sales">Normal Sales</option>
                         <option value="promo">Promo</option>
                       </select>
                     </td>
                     <td><button type="submit" class=" btn btn-xs btn-primary" value="<?php echo $row["stock_id"];?>" name="add[]">add</button></td>
                   </tr>
                 </tbody>
               </form>

                 <?php
               }}
                 ?>
               </table>
             
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
                     <th>Price</th>
                     <th class="text-center">Total Amount</th>
                   </tr>
                 </thead>
                  <?php
            

               $query2 = mysqli_query($connection, "SELECT * FROM sales
               LEFT JOIN stock on stock.stock_id = sales.stock_id WHERE transaction_id='".$_SESSION['transaction']."'");
                 while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

                  ?>

                 <tbody>
                   <tr>
                     <td><?php echo $row["name"];?></td>
                     <td><?php echo $row["quantity1"];?></td>
                     <td><?php echo $row["amount"];?></td>
                     <td class="text-center"><span><del><b>N</b></del></span><?php  echo number_format($row["total"]);?></td>
                   </tr>
                 </tbody>
                 <?php
                    }
                 ?>

               </table>

               <?php

                  $query2 = mysqli_query($connection, "SELECT * FROM sales
               LEFT JOIN stock on stock.stock_id = sales.stock_id WHERE transaction_id='".$_SESSION['transaction']."'");
                 while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

                  if (mysqli_num_rows($query2) > 0) {

                  ?>
                   <div class="col-md-4 col-sm-offset-4" style="background-color: #000; color: #fff; border-radius: 20px;">
                  <span class="col-sm-offset-2 text-white " style="font-size: 35px; height: 40px; padding-left: 35px;">
                  <?php
                    $query = mysqli_query($connection, " SELECT sum(total) FROM sales WHERE transaction_id='".$_SESSION['transaction']."'");

 while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

    echo "<del><b>N</b></del>".''.number_format($row["sum(total)"]);
     

    }

    ?>
               </span> </div>

                  <?php
                    # code...
                  }else{

                  }
}
                  ?>


               
                </div>
                <!-- col-md-9 -->
              
                
                </div>

              </div>
            </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <span> <a href="invoice.php" class="btn btn-primary col-md-4 col-sm-offset-4" style="margin-top: -20px;"> <span class="fa  fa-credit-card"></span> Generate Invoice</a></span>
              </div>
            </form>
          </div>
          <!-- /.box -->

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
