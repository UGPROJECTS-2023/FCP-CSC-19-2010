<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);      
$location=$_FILES["pic"]["name"];
$name=$_POST['name'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$blood_group=$_POST['blood_group']; 

$sql = mysqli_query($connection,"INSERT INTO patient(patient_name,gender,age,address,phone,blood_group,picture) VALUES('$name','$gender','$dob','$address','$phone','$blood_group','$location')");  

echo "<script>alert('Successfully Added!!!'); window.location='addpatient.php'</script>";
 
 
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
     <div class="col-md-10">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title"> <span class="fa fa-user-plus"></span> Register Patient</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-6">
                  <label > Patient Name</label>
                  <input type="text" required class="form-control" name="name" placeholder="  Name" required>
                </div>
                 <div class="form-group col-md-6">
                  <label>Gender</label>
                  <select class="form-control" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                  </select>
                </div>
                 <div class="form-group col-md-6">
                  <label >Date of Birth</label>
                  <input type="date" class="form-control" name="dob">
                </div>
               <div class="form-group col-lg-6">
                <label>Select Blood Group</label>
                    <select name="blood_group" class="form-control">
                      
                      <option value="0+">O+</option>
                      <option value="0-">O-</option>
                      <option value="A+">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                    </select>
                  </div>
                 <div class="form-group col-md-6">
                  <label >Address</label>
                  <input type="text" class="form-control prc" name="address" placeholder=" Address">
                </div>
                 <div class="form-group col-md-6">
                  <label >Phone Number</label>
                  <input type="number" class="form-control prc" name="phone" placeholder=" Phone Number">
                </div>
                <div class="form-group col-md-6 mb-5">
                  <label >Picture</label>
                  <input type="file" name="pic">
                </div>

                <div class="form-group col-md-4 col-sm-offset-4">
                      <button type="submit" name="submit" class="btn btn- form-control" style="background-color: #C43F00 !important; color: white;">Submit</button>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                Fill all fields
              </div>
            </form>
          </div>
          <!-- /.box -->

       
    </section>
     
</div>
<!-- ./wrapper -->

<?php include('admin_js.php'); ?>
</body>
</html>
