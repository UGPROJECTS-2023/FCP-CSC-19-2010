<?php
 session_start();
 include'config/db.php';
 $err="";

if (isset($_POST['submit'])) {





 
/*$sql = mysqli_query($connection,"INSERT INTO sales(transaction_id) VALUES('".$_SESSION['transaction']."')");  */
 
echo "<script>window.location='make_new_transaction.php'</script>";
 
 
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
     <div class="col-md-12" style="margin-top: -20px;">
  <!-- general form elements -->
          <div class="box">
            <div class="box-header bg-info with-border">
              <span class="fa fa-money"></span>
              <h3 class="box-title">Bill Patient</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             
                <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-9">
                    
                      
                    </span>

                    <div class="form-group col-md-6 col-sm-offset-5 mt-">
                      <label>Search Patient</label>
                      <div class="input-group">
                                                <input type="text" name="search" class="form-control" placeholder="Search Patient">
                                                    <div class="input-group-btn">
                                                      <button type="submit" name="go" class="btn btn-" style="background-color: #C43F00 !important; color: white;">Search</button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                                  <div class="col-md-12 ">
                                    
                                            <div class="card">
                                                <div class="card-body">
                                                    <?php echo $err; ?>
                                                      <?php
                                                    

                                                        if(isset($_POST['go'])){
                                                            
                                                     
                                                            $_SESSION['transaction']=rand();
                                                            $_SESSION['search']=$_POST['search'];
 

                                                          

                                                            ?>
                                      
               <table class="table table-responsive-md" id="dataTable" style="" cellspacing="0">

                                            
                                             <?php

                                             ?>
                                            <thead>
                                              <tr class="bg-info text-white">
                                                <th>Patient Name</th>
                                                <th>Gender</th>
                                                <th>Blood_group</th>
                                                <th>Address</th>
                                                <th>Phone Number</th>
                                                <th>Picture</th>
                                                <th>Action</th>
                                              </tr>
                                            </thead>
                                      <?php
            

                                $query2 = mysqli_query($connection, "SELECT * FROM patient WHERE patient_name LIKE '%".$_SESSION['search']."%'");
                                         if (mysqli_num_rows($query2) !=0) {
                                         while($row = mysqli_fetch_array($query2,MYSQLI_ASSOC)){
                                  ?>

                                  <tr>
                                  <td><?php echo $row["patient_name"]; ?></td>
                                  <td><?php echo $row["gender"]; ?></td>
                                  <td><?php echo $row["blood_group"]; ?></td>
                                  <td><?php echo $row["address"]; ?></td>
                                  <td><?php echo $row["phone"]; ?></td>
                                  <td align="center"><a href="images/<?php echo $row['picture']; ?>"  class="btn btn-sm btn-success fa fa-sm  fa-check-circle"  ><strong style="font-size: 12px;"> View Picture</strong></a></td>
                                   <td align="center"><a href="make_new_transaction.php?id=<?php echo $_SESSION['patient']=$row['patient_id']; ?>" class="btn  btn-sm btn-primary fa  fa-check-circle fa-sm" ><strong style="font-size: 12px;"> Bill Patient</strong></a></td>

                </tr>





                                  <?php
                                        }
                                     }}
                                      ?>
                                    </table>
                                  </div>
                                </div>
                              </div>

                         <!--col-md-12 -->




                         

                
               
</form>
              </div>
            </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                Generate Invoice
              </div>
        
          </div>
          <!-- /.box -->

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
