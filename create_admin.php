<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);      
$location=$_FILES["pic"]["name"];
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];




 
$sql = mysqli_query($connection,"INSERT INTO users(name,username,password,picture) VALUES('$name','$username','$password','$location')");  
 
echo "<script>alert('Successfully Added!!!'); window.location='create_admin.php'</script>";
 
 
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
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><span class="fa fa-user-plus"></span> Create Admin</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label >Name</label>
                  <input type="text" class="form-control" name="name" placeholder=" Full Name">
                </div>
                 
                 <div class="form-group col-md-6">
                  <label >Username</label>
                  <input type="text" class="form-control" name="username" placeholder=" Username">
                </div>
                 <div class="form-group col-md-6">
                  <label >Password</label>
                  <input type="password" class="form-control prc" name="password" placeholder=" Password">
                </div>
                 
                <div class="form-group col-md-6 mb-5">
                  <label >Picture</label>
                  <input type="file" name="pic" class="form-control">
                </div>

                <div class="form-group col-md-4 col-sm-offset-3">
                      <button type="submit" name="submit" class="btn btn- form-control"  style="background-color: #C43F00 !important; color: white;">Submit</button>
                </div>
               
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
           <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"><span class="fa fa-users"></span> Admin</h3>
            </div>
            <!-- /.box-header -->
           
            <table id="example1" class="table table-bordered text-center  table-responsive-sm table-striped" style="font-size: 13px;">
                <thead>
                <tr>
                  <th>Admin Name</th>
                  <th>Username</th>
                  <th>Picture</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                     <?php

          require_once('config/db.php');

             

    $query = mysqli_query($connection, "SELECT * FROM users");
    
    while($row = mysqli_fetch_array($query,MYSQLI_ASSOC)){
     
  ?>
                <tr>
                  <td><?php echo $row["name"]; ?></td>
                  <td><?php echo $row["username"]; ?></td>
                   <td align="center"><a href="images/<?php echo $row['picture']; ?>"  class="btn btn-sm btn-primary fa fa-xs  fa-image"  ><strong style="font-size: 12px;"> View Picture</strong></a></td>


          
                    <td align="center"><a href="confirm_delete.php?id=<?php echo $row['id']; ?>"  onClick= "return confirm('Are you sure you want to delete record?')" class="btn  btn-sm btn-danger fa  fa-trash fa-xs" ><strong style="font-size: 12px;"> Delete</strong></a></td>

                </tr>
                <?php
                  }
                ?>
               
                </tbody>
                
              </table>



               
              </div>
              <!-- /.box-body -->

            
            </form>
          </div>

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
