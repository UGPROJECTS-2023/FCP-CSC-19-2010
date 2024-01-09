 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="images/profile.png"  class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Welcome Admin</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="adminpage.php"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
        </li>
        <li>
          <a href="new_transaction.php"><i class="fa fa-credit-card"></i> <span> Bill Patient</span></a>
        </li>
           <li class="treeview">
          <a href="#">
            <i class="fa fa-database"></i>
            <span>Patient</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addpatient.php"><i class="fa fa-database"></i> Add Patient</a></li>
            <li><a href="viewpatients.php"><i class="fa fa-database"></i> View Patient</a></li>
          </ul>
        </li>

         <li class="treeview" style="font-size: 13px;">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Drugs</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="addDrugs.php" style="font-size: 13px;"><i class="fa fa-user-plus"></i> Add Drugs</a></li>
            <li><a href="viewOutlets.php" style="font-size: 13px;"><i class="fa fa-users"></i> View Drugs</a></li>
            <!-- <li><a href="outletStock.php"><i class="fa fa-database"></i> Outlet Stock</a></li>
            <li><a href="outletSells.php"><i class="ion ion-ios-cart-outline"></i> View Outlets</a></li> -->
          </ul>
        </li>
        
        <li>
          <a href="transactions_history.php"><i class="fa fa-money"></i><span>Transaction History</span></a>
        </li>
         
        <li><a href="create_admin.php"><i class="fa fa-user-plus"></i> <span>Add new Admin</span></a></li>
        <li class="header">SIDEBAR MENU</li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    
    </section>
