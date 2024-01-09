<?php
session_start();
 include'config/db.php';

              $query = mysqli_query($connection, " SELECT * FROM users WHERE username='".$_SESSION['username']."'");
                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                $fname=$row["name"];
                
              }


               $query = mysqli_query($connection, " SELECT * FROM billing 
               LEFT JOIN drugs on drugs.drug_id = billing.drug_id
               LEFT JOIN patient on patient.patient_id = billing.patient_id WHERE transaction_id='".$_SESSION['transaction']."'");

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
<body style="font-family: time new romans; background-color: #eee;" class="" onload="window.print();">
<div class="wrapper">

  <div class="col-md-4 col-md-offset-4">
    <div class=" " style="background-color: #fff; margin-top: 15px;">
      <div class="box-body">
        <h4 class="text-center"><b>HOSPITAL BILLING SYSTEM</b></h4><br>
      <img class="" src="images/logo.png" width="100%" height="90" style=" margin-top: -20px; border-radius: 20px;"><br>
        <span><h4 class="text-center">CASH RECIEPT</h4></span><br>
        <table border="1" align="center" class="table table-responsive-md table-bordered border-dark col-md-offset-0" style="margin-top: -20px;">
          <tr style="background-color: ; border: 2px dotted gray;">
            <th>Patient's Name:</th>
            <td><?php echo $name; ?></td>
          </tr>
           <tr style="background-color: ; border: 2px dotted gray;">
            <th> Cashier's Name:</th>
            <td><?php echo $fname; ?></td>
          </tr>
           <tr style="background-color: ; border: 2px dotted gray;">
            <th>Transaction Date:</th>
            <td><?php echo $date; ?></td>
          </tr>
           <tr style="background-color: ; border: 2px dotted gray;">
            <th>Reciept No:</th>
            <td><?php echo $_SESSION['transaction']; ?></td>
          </tr>
          
        </table>
        <table border="1" align="center" class="table table-responsive-md mb-3 table-bordered border-dark col-md-offset-0" style="border: 4px thin black;">
            <tr class="" style="background-color: ; border: 2px dotted gray;">
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Amount</th>
          </tr>
         
            <?php
        

               $query = mysqli_query($connection, " SELECT * FROM billing 
               LEFT JOIN drugs on drugs.drug_id= billing.drug_id WHERE transaction_id='".$_SESSION['transaction']."'");

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
               $query = mysqli_query($connection, " SELECT sum(total) FROM billing WHERE transaction_id='".$_SESSION['transaction']."'");

                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

               
               echo "<del><b>N</b></del>".' '.$totally=number_format($row["sum(total)"]);
               

              }



            ?>
          </td>
            
          </tr>
          <tr style="border: 2px dotted gray; ">
            <td align="center" colspan="4"><span>Designed by  </span><br><b>We appreciate your patronage....Thank you ! </b></td>
            
          </tr>
        </table>
        <span class=" pull-right" > <a href="print.php" class="btn btn-primary btn-md" > <span class="fa fa-print"></span> Print</a> </span>
      </div>
    </div>
  </div>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
