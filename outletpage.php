<!DOCTYPE html>
<html>
<head>
 <?php include('admin_header.php'); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <?php include("outlet_nav.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include("outlet_sidebar.php"); ?>
  
    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-dashboard"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Outlet Dashboard</span>
              <span class="info-box-number"><small> Online</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-user-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Outlet</span>
              <span class="info-box-number">
                 <?php

                  require_once('config/db.php');
                  $query = mysqli_query($connection, "SELECT count(*) FROM outlets");
                  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    echo $row["count(*)"];
                  }
                 ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Outlet Sales</span>
              <span class="info-box-number">
                 <?php
                  require_once('config/db.php');
                  $query = mysqli_query($connection, "SELECT distinct count(transaction_id) FROM outlet_sales");
                  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    echo $row["count(transaction_id)"];
                  }
                 ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">No. Stock</span>
              <span class="info-box-number">
                 <?php
                  require_once('config/db.php');
                  $query = mysqli_query($connection, "SELECT count(*) FROM outlet_stock");
                  while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
                    echo $row["count(*)"];
                  }
                 ?>
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

      </div>
      <!-- /.row -->

     
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
