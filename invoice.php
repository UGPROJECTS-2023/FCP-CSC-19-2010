<?php
session_start();
 include'config/db.php';

               $query = mysqli_query($connection, " SELECT * FROM sales 
               LEFT JOIN stock on stock.stock_id = sales.stock_id WHERE transaction_id='".$_SESSION['transaction']."'");

                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

                $name=$row["name"];
                $quantity=$row["quantity1"];
                $total=$row["total"];
                $amount=$row["amount"];
                $date=$row["entry_date_sales"];
                $outlet=$row["outlet_id"];

              }


               $query = mysqli_query($connection, " SELECT * FROM outlets WHERE outlet_id='$outlet'");

                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

                $customer=$row["name"];
              }



?>

<!DOCTYPE html>
<html>
<head>
 <?php include('admin_header.php'); ?>
</head>
<body class="" onload="//window.print();">
<div class="wrapper">

  <div class="col-md-4 col-md-offset-4">
    <div class=" " style="background-color: #fff; margin-top: 15px;">
      <div class="box-body">
        <h3 class="text-center">Transaction Management System</h3><br>
      <img class="" src="images/img.jpg" width="90" height="90" style="margin-left: 140px; margin-top: -20px;"><br>
        <span><h4 class="text-center">CASH RECIEPT</h4></span><br>
        <table border="1" align="center" class="table table-responsive-md table-bordered border-dark col-md-offset-0" style="margin-top: -20px;">
          <tr style="background-color: ; border: 2px dotted gray;">
            <th>Customer's Name:</th>
            <td><?php echo $customer; ?></td>
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
        

               $query = mysqli_query($connection, " SELECT * FROM sales 
               LEFT JOIN stock on stock.stock_id = sales.stock_id WHERE transaction_id='".$_SESSION['transaction']."'");

                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

                  ?>
           <tr style="background-color: ; border: 2px dotted gray;">
            <td><?php echo $row["name"]; ?></td>
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
               $query = mysqli_query($connection, " SELECT sum(total) FROM sales WHERE transaction_id='".$_SESSION['transaction']."'");

                while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){

               
               echo "<del><b>N</b></del>".' '.$totally=number_format($row["sum(total)"]);
               

              }



            ?>
          </td>
            
          </tr>
          <tr style="border: 2px dotted gray; ">
            <td align="center" colspan="4"><span>Powered by TeamCODED </span><br><b>We appreciate your patronage....Thank you ! </b></td>
            
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
