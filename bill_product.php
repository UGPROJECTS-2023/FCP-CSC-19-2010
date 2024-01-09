<?php
 session_start();
 include'config/db.php';

 $product = $_GET['id'];

if (isset($_POST['add'] ) ){

$name=$_POST['name'];
$quantity=$_POST['quantity'];
$amount=$_POST['amount'];
$total=$_POST['total'];
$caterory=$_POST['caterory'];


$sql = mysqli_query($connection,"INSERT INTO stock(name,stock_type,quantity,price_per_product,total_price, product_id) VALUES('$name','$caterory','$quantity','$amount','$total', '$product')");  
 
// echo "<script>alert('Material Added!!!'); window.location='generate_invoice.php'</script>";

?>
   <script>
    document.getElementById('disp').style.display = "block";
      //setTimeout(() => document.getElementById('msg').style.display = "none", 3000);
        
  </script>

<?php



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
   
     
          
           <form action="" method="post"> <!-- general form elements -->
          <div class="box">
            <div class="box-header bg-info with-border text-center">
              <span class="fa fa-money"></span>
              <h3 class="box-title"><b>Bill Materials</b></h3>
            
              
              </form>
            </div>
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
                     <th>Item</th>
                     <th>Category</th>
                     <th>Price</th>
                     <th>Quantity</th>
                     <th>Total Amount</th>
                     <td>Action</td>
                   </tr>

                 </thead>
                  <?php


               // $query2 = mysqli_query($connection, "SELECT * FROM stock WHERE name LIKE '%$search%' OR stock_type LIKE '%$search%' OR manufacturer LIKE '%$search%'");
               //   while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

                  ?>
                   <form role="form" action="" method="post">
                 <tbody>
                   <tr>
                     <td><input type="text" name="name" required=""></td>
                     <td><select name="caterory">
                       <option>Select Category</option>
                       <option>Funitures</option>
                       <option>POP</option>
                       <option>Building</option>
                       <option>Roofing</option>
                       <option>Plumbing</option>
                       <option>Electricity</option>
                       <option>Painting</option>
                       <option>Tiling</option>
                       <option>Door/Windows</option>
                     </select></td>
                     <td><input type="text" id="num1" name="amount" class="field " required></td>
                     <td><input type="number" id="num2" name="quantity" class="field" required></td>
                     <td><input type="number" id="num3" class="field" name="total" required></td>
                     <td><button class="btn btn-primary btn-xs" type="submit" name="add" id="add">Add</button></td>
                   </tr>
                 </tbody>
                 </form>

                 <?php
               // }}
                 ?>
               </table>
                  <div class="col-md-6 col-sm-offset-2 alert alert-success text-center msg" id="disp" >
                    Successfully Added
                  </div>
             </div>
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-12">
                  <div class="row">

                    <div class="col-md-9">
               <table class="table table-striped">
                 <thead>
                   <tr class="bg-info">
                     <th>Item</th>
                     <th>Category</th>
                     <th>Quantity</th>
                     <th>Price</th>
                     <th class="text-center">Action</th>
                  <!--    <th class="text-center">Total Amount</th> -->
                   </tr>
                 </thead>
                  <?php
            

               $query2 = mysqli_query($connection, "SELECT * FROM stock WHERE product_id='$product'");
                 while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

                  ?>

                 <tbody>
                   <tr>
                     <td><?php echo $row["name"];?></td>
                     <td><?php echo $row["stock_type"];?></td>
                     <td><?php echo $row["quantity"];?></td>
                     <td><?php echo $row["price_per_product"];?></td>
                     <td align="center"><a href="use_material.php?id=<?php echo $row['stock_id']; ?>"  class="btn  btn-sm btn-info fa  fa-check-circle fa-sm" ><strong style="font-size: 12px;"> Use Materials</strong></a></td>

                   <!--   <td class="text-center"><span><del><b>N</b></del></span><?php  echo number_format($row["total_price"]);?></td> -->
                   </tr>
                 </tbody>
                 <?php
                    }
                 ?>

               </table>
                </div>
                <!-- col-md-9 -->
                <div class="col-md-3" style="background-color: #eee; height: 180px; border: 1px solid black">
                  <span class=" col-md-4 col-sm-offset-2 " style="font-size: 35px; margin-top: 60px;"   >
                    <?php
                    $query = mysqli_query($connection, " SELECT sum(total_price) FROM stock WHERE product_id='$product'");

                     while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

                        echo "<del><b>N</b></del>".''.number_format($row["sum(total_price)"]);
                         

                        }

                        ?>
                                      </span>
                  
                  
                </div>

              </div>
            </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                Bill Materials
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
