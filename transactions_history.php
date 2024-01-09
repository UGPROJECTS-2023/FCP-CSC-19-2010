<!DOCTYPE html>
<html>
<head>
 <?php              
 session_start();

  include('admin_header.php'); ?>
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
            <div class="box-body ">
              <div class="col-md-11">
              <table id="example1" class="table table-bordered table-responsive-sm table-striped">
                <thead>
                <tr>
                  <th>Patient's_Name</th>
                  <th>Reciept No.</th>
                  <th>More Details</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     <?php

           include'config/db.php';
          $query = mysqli_query($connection, "SELECT DISTINCT transaction_id, patient_name FROM billing
          LEFT JOIN patient on patient.patient_id = billing.patient_id");
          while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
        ?>
                      <tr>
                  <td><?php echo $row["patient_name"]; ?></td>
                  <td><?php echo $row["transaction_id"]; ?></td>


                   <td align="center"><a href="viewmoreinfo.php?transaction_id=<?php echo $row['transaction_id']; ?>"  class="btn btn-sm btn-success fa fa-sm  fa-check-circle"  ><strong style="font-size: 12px;"> More details</strong></a></td>


                    <td align="center"><a href="delete_history.php?id=<?php echo $row["transaction_id"]; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn  btn-sm btn-danger fa  fa-trash fa-sm" ><strong style="font-size: 12px;"> Delete</strong></a></td>

                </tr>
                <?php
                  }
                ?>
               
                </tbody>
                
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
