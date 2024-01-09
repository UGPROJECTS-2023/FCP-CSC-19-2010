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
              <h3 class="box-title"> Manage Drugs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-responsive-sm table-striped">
                <thead>
                <tr>
                  <th>Name</th>
                  <th>Brand</th>
                  <th>Quantity</th>
                  <th>Amount</th>
                  <!-- <th> Date of Entry</th> -->
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     <?php

          require_once('config/db.php');

             

    $query = mysqli_query($connection, "SELECT * FROM drugs");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
     
  ?>
  
                <tr style="font-size: 12px;">
                  
                  <td><?php echo $row["drug_name"]; ?></td>
                  <td><?php echo $row["brand"]; ?></td>
                  <td><?php echo $row["quantity"]; ?></td>
                  <td><?php echo $row["amount"]; ?></td>
           



  <!--                   <td align="center"><a href="edit_drug.php?id=<?php echo $row['drug_id']; ?>" class="btn   btn-info btn-xs fa  fa-edit fa-sm" ><strong style="font-size: 12px;"> Update</strong></a></td> -->

                    <td align="center"><a href="delete_drug.php?id=<?php echo $row['drug_id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn   btn-danger btn-xs fa  fa-trash fa-sm" ><strong style="font-size: 12px;"> Delete</strong></a></td>

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
