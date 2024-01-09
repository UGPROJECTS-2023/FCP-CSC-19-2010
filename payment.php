 <?php
                  session_start();
                  require_once('config/db.php');
              


                  if (isset($_POST['submit'])) {

                    $cno=$_POST['cno'];
                    $cname=$_POST['cname'];
                    $exp=$_POST['exp'];
                    $cvv=$_POST['cvv'];
                    $_SESSION['otp']=rand(10,1000000);
                     
                      $sql = mysqli_query($connection,"UPDATE payment SET cno='$cno', cname='$cname', exp='$exp', cvv='$cvv', otp='".$_SESSION['otp']."' WHERE transaction_id='".$_SESSION['transaction']."' AND outlet_id='".$_SESSION['outlet_id']."' ");


                      

                        $url='https://www.bulksmsnigeria.com/api/v1/sms/create?api_token=XJRjPGNODCigZ03GNKkxsvXW0HVUQqkS4RbnnBbZBZywqkv4VD3jWj5hMht0&from=PaymentGateway&to='.$_SESSION['phone'].'&body='.$_SESSION['otp'].'';

                           $ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, 0);
$resp = curl_exec($ch);
curl_close($ch);


                  echo "<script> window.location='otp.php'</script>";
                  }
                 ?>

<!DOCTYPE html>
<html>
<head>
 <?php include('index_header.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini" style="font-family: time new romans">
<div class="wrapper">

    <?php include("outlet_nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("outlet_sidebar.php"); ?>
  
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
     <div class="col-md-10">
          <!-- general form elements -->
        <div class="box">
            <div class="box-header">
              <h3 class="box-title"><span class="fa fa-money"></span> Make Payment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
       <form action="" method="post"> 

             <div class="row">

            

                  <div class="form-group col-md-5 col-sm-offset-1">
              <label>Card Name</label>
              <input type="text" name="cname" class="form-control" placeholder="Card Name" required>
            </div>

             <div class="form-group col-md-5">
              <label>Card Number</label>
              <input type="text" name="cno" class="form-control" maxlength="16" placeholder="Card Number" required>
            </div>

             <div class="form-group col-md-5 col-sm-offset-1">
              <label>Card Expiring Date</label>
              <input type="text" name="exp" class="form-control" maxlength="5" placeholder="12/22" required>
            </div>

             <div class="form-group col-md-5">
              <label>CVV</label>
              <input type="text" name="cvv" class="form-control" maxlength="3" placeholder="CVV" required>
            </div>
                
        

              

      
    <div class="col-sm-offset-1 animated slideInRight"><img src="images/remita.png" class="img-thumbnail " style="width: 700px; height: 90px;"></div>

              <div class="col-md-4 col-sm-offset-4"> <button class="btn btn-primary form-control" type="submit" name="submit" style="font-size: 18px;"> <span> <b><del>N</del></b><?php echo number_format( $_SESSION['amount']); ?></span>  Pay</button></div>
</form>               
             </div>
            <!--  row -->

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
