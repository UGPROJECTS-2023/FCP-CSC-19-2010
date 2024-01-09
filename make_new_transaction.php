<?php
 session_start();
 include'config/db.php';
 $_SESSION['patient']=$_GET['id'];

if (isset($_POST['add'] ) ){

$add=$_POST['add'];
$quantity=$_POST['quantity'];
$amount=$_POST['amount'];
$total=$_POST['total'];
$add=$_POST['add'];

foreach ($add as $key => $addd) {


 

$sql = mysqli_query($connection,"INSERT INTO billing (drug_id, patient_id, quantity1, amount, total, transaction_id) VALUES('$add[$key]',  '".$_SESSION['patient']."', '$quantity[$key]', '$amount', '$total[$key]', '".$_SESSION['transaction']."')");


 $query = mysqli_query($connection, " SELECT * FROM drugs 
  LEFT JOIN billing on billing.drug_id = drugs.drug_id WHERE drugs.drug_id='$addd'");

 while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

      $q=$row["quantity"];
      $qq=$row["quantity1"];
      $_SESSION['qua']=$q-$qq;

    }


 $query = mysqli_query($connection, "UPDATE drugs SET quantity='".$_SESSION['qua']."' WHERE drug_id='$addd' ");
    
 
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
                     <td>Action</td>
                   </tr>

                 </thead>
                  <?php


               $query2 = mysqli_query($connection, "SELECT * FROM drugs WHERE drug_name LIKE '%$search%' OR brand LIKE '%$search%'");
                 while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

                  ?>
                   <form role="form" action="" method="post">
                 <tbody>
                   <tr>
                     <td><input type="text" name="name" readonly value="<?php echo $row["drug_name"];?>"></td>
                     <td><input type="text" id="num1" name="amount" class="field " readonly value="<?php echo $row["amount"];?>"></td>
                               
                     <td><input type="number" id="num2" name="quantity[]" class="field"></td>
                     <td><input type="number" id="num3" class="field" name="total[]"></td>
                     <td><button class="btn btn-primary btn-xs" value="<?php echo $row["drug_id"];?>" type="submit" name="add[]">Add</button></td>
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
                     <th>Item  </th>
                     <th>Quantity</th>
                     <th>Price</th>
                     <th class="text-center">Total Amount</th>
                   </tr>
                 </thead>
                  <?php
            

               $query2 = mysqli_query($connection, "SELECT * FROM billing
               LEFT JOIN drugs on drugs.drug_id = billing.drug_id WHERE transaction_id='".$_SESSION['transaction']."'");
                 while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){

                  ?>

                 <tbody>
                   <tr>
                     <td><?php echo $row["drug_name"];?></td>
                     <td><?php echo $row["quantity1"];?></td>
                     <td><?php echo $row["amount"];?></td>
                     <td class="text-center"><span><del><b>N</b></del></span><?php  echo number_format($row["total"]);?></td>
                   </tr>
                 </tbody>
                 <?php
                    }
                 ?>

               </table>
                </div>
                <!-- col-md-9 -->
                
              </div>
            </div>
            <div class="col-md-12"> 

              <span class=" col-md-4 col-sm-offset-4 text-center animated bounce" style="font-size: 35px; margin-top: 60px; border-radius: 20px; background-color: #000; color: #fff;"   >
                    <?php
                    $query = mysqli_query($connection, " SELECT sum(total) FROM billing WHERE transaction_id='".$_SESSION['transaction']."'");

 while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

    echo "<del><b>N</b></del>".''.number_format($row["sum(total)"]);
     

    }

    ?>
                  </span>

            </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <div class="col-md-4 col-sm-offset-4 ">
                    <a href="branch_invoice.php" class="btn btn-primary col-md-12" style="margin-top: px;"> <span class="fa  fa-credit-card"></span> Generate Invoice</a>
                  </div>
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
