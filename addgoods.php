<?php
 session_start();
 include'config/db.php';

if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["pic"]["tmp_name"],"images/" . $_FILES["pic"]["name"]);      
$location=$_FILES["pic"]["name"];
$name=$_POST['name'];
$type=$_POST['type'];
$manufacturer=$_POST['manufacturer'];
$quantity=$_POST['quantity'];
$price=$_POST['price'];
$total=$_POST['total'];
$cprice=$_POST['cprice'];  



 
$sql = mysqli_query($connection,"INSERT INTO stock(name,stock_type,manufacturer,quantity,price_per_product,total_price,customers_price,picture) VALUES('$name','$type','$manufacturer','$quantity','$price','$total','$cprice','$location')");  
 
echo "<script>alert('Successfully Added!!!'); window.location='addgoods.php'</script>";
 
 
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
              <h3 class="box-title">Add Outlet</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group col-md-4">
                  <label >Name</label>
                  <input type="text" class="form-control" name="name" placeholder=" Goods Name">
                </div>
                 <div class="form-group col-md-4">
                  <label>Goods Type</label>
                  <select class="form-control" name="type">
                    <option value="Food">Food</option>
                    <option value="Drinks">Drinks</option>
                    <option value="Cosmetics">Cosmetics</option>
                    <option value="Clothes">Clothes</option>
                    <option value="Others"> Others</option>
                  </select>
                </div>
                 <div class="form-group col-md-4">
                  <label >Manufacturer</label>
                  <input type="text" class="form-control" name="manufacturer" placeholder=" Manufacturer">
                </div>
                 <div class="form-group col-md-4">
                  <label >Price Per Product</label>
                  <input type="number" class="form-control prc" id="num1" name="price" placeholder=" Price Per Product">
                </div>
                 <div class="form-group col-md-4">
                  <label >Quantity</label>
                  <input type="Number" class="form-control prc" id="num2" name="quantity" placeholder=" Quantity">
                </div>
                <div class="form-group col-md-4">
                  <label>Total Price</label>
                  <input type="number" class="form-control " id="num3" name="total" id="result" readonly placeholder=" Total Price">
                </div>
                 <div class="form-group col-md-4">
                  <label>Customers Price</label>
                  <input type="number" class="form-control" name="cprice"  placeholder=" Customers Price">
                </div>
                <div class="form-group col-md-4 mb-5">
                  <label >Picture</label>
                  <input type="file" name="pic">
                </div>

                <div class="form-group col-md-4 col-sm-offset-4">
                      <button type="submit" name="submit" class="btn btn-primary form-control">Submit</button>
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
