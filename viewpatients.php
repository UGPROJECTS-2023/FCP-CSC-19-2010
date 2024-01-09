<?php session_start(); ?>

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
              <h3 class="box-title"> <span class="fa fa-bed"></span> Patients Report</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive-sm table-striped" style="font-size: 13px;">
                <thead>
                <tr>
                  <th>Patient Name</th>
                  <th>Gender</th>
                  <th>Date of Birth</th>
                  <th>Blood_group</th>
                  <th>Address</th>
                  <th>Phone Number</th>
                  <th>Picture</th>
<!--                   <th>Action</th> -->
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     <?php

          require_once('config/db.php');

             

    $query = mysqli_query($connection, "SELECT * FROM patient");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
     
  ?>
                <tr>
                  <td><?php echo $row["patient_name"]; ?></td>
                  <td><?php echo $row["gender"]; ?></td>
                  <td><?php echo $row["age"]; ?></td>
                  <td><?php echo $row["blood_group"]; ?></td>
                  <td><?php echo $row["address"]; ?></td>
                  <td><?php echo $row["phone"]; ?></td>

                   <td align="center"><a href="images/<?php echo $row['picture']; ?>"  class="btn btn-sm btn-success fa fa-sm  fa-check-circle"  ><strong style="font-size: 12px;"> View Picture</strong></a></td>


<!--                     <td align="center"><a href="view_product.php?id=<?php echo $row['patient_id']; ?>"  class="btn  btn-sm btn-info fa  fa-edit fa-sm" ><strong style="font-size: 12px;"> Edit</strong></a></td> -->

                    <td align="center"><a href="confirm_delete.php?id=<?php echo $row['patient_id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn  btn-sm btn-danger fa  fa-trash fa-sm" ><strong style="font-size: 12px;"> Delete</strong></a></td>

                </tr>
                <?php
                  }
                ?>
               
                </tbody>
                
              </table>
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
