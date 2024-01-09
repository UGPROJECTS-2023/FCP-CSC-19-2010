 <header class="main-header">
    <nav class="navbar navbar-static-top" style="background-color: #C43F00 !important;">
      <div class="container">
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand"><b> HOSPITAL BILLING SYSTEM</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
          <!--   <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact us</a></li> -->
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
       <!--          <li><a href="outlet_login.php">Outlet Loging</a></li> -->
                <li><a href="admin_login.php">Admin Login</a></li>
                <li class="divider"></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
          
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="admin_login.php" class="dropdown-toggle" data-toggle="dropdown">
                <span class="fa fa-user-circle"></span>
                <span class="hidden-xs">Account</span>
              </a>
              
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>