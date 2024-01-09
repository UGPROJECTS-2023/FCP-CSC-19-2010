<?php
session_start();
 include'config/db.php';
       $trans=$_GET['transaction_id'];

              $query = mysqli_query($connection, " SELECT * FROM users WHERE username='".$_SESSION['username']."'");
                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                $fname=$row["name"];
                
              }


               $query = mysqli_query($connection, " SELECT * FROM billing 
               LEFT JOIN drugs on drugs.drug_id = billing.drug_id
               LEFT JOIN patient on patient.patient_id = billing.patient_id WHERE transaction_id='$trans'");

                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

                $name=$row["patient_name"];
                $quantity=$row["quantity1"];
                $total=$row["total"];
                $amount=$row["amount"];
                $date=$row["bill_date"];

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
     <div class="col-md-12">
          <!-- general form elements -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title"><span class="fa fa-money fa-lg"></span> Transaction History</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-6" style="margin-top: 40px;">
               <table border="1" align="center" class="table table-responsive-md table-bordered border-dark col-md-offset-0" style="margin-top: -20px;">
          <tr style="background-color: ; border: 2px dotted gray;">
            <th>Patient's Name:</th>
            <td><?php echo $name; ?></td>
          </tr>
           <tr style="background-color: ; border: 2px dotted gray;">
            <th>Cashier's Name:</th>
            <td><?php echo $fname; ?></td>
          </tr>
           <tr style="background-color: ; border: 2px dotted gray;">
            <th>Transaction Date:</th>
            <td><?php echo $date; ?></td>
          </tr>
           <tr style="background-color: ; border: 2px dotted gray;">
            <th>Reciept No:</th>
            <td><?php echo $trans; ?></td>
          </tr>
          
        </table>
        <table border="1" align="center" class="table table-responsive-md table-bordered border-dark col-md-offset-0" style="border: 4px thin black; margin-top: -22px;">
            <tr class="" style="background-color: ; border: 2px dotted gray;">
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
          </tr>
          


                 <?php
             

               $query = mysqli_query($connection, " SELECT * FROM billing 
               LEFT JOIN drugs on drugs.drug_id= billing.drug_id WHERE transaction_id='$trans'");

                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

                  ?>
          <tr style="background-color: ; border: 2px dotted gray;">
            <td><?php echo $row["drug_name"]; ?></td>
            <td><?php echo $row["quantity1"]; ?></td>
            <td><?php echo $row["amount"]; ?></td>
            <td><?php echo $row["total"]; ?></td>
           </tr>
            <?php
          }
          ?>
         
          <tr style="background-color: ; border: 2px dotted gray;">
            <td align="right" colspan="4" style="padding-right: 35px; font-size: 17px;"><b>Total: </b> 

            <?php
               $query = mysqli_query($connection, " SELECT sum(total) FROM billing WHERE transaction_id='$trans'");

                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

               
               echo "<del><b>N</b></del>".' '.$totally=number_format($row["sum(total)"]);
               

              }



            ?>
          </td>
            
         
        </table>
</div>
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
