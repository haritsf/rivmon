<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>River Monitoring</title>
  <link rel="icon" type="image/png" href="../dist/img/icon.png" sizes="32x32">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../bower_components/datatables-plugins/dataTables.bootstrap.css">
  <link rel="stylesheet" href="../bower_components/datatables-responsive/dataTables.responsive.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- JS -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../dist/js/adminlte.min.js"></script>
  <script type="text/javascript" src="../bower_components/datatables/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="../bower_components/datatables/js/dataTables.bootstrap.min.js"></script>
  <script type="text/javascript" src="../bower_components/datatables-responsive/dataTables.responsive.js"></script>

</head>

<body class="hold-transition skin-green fixed sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <!-- Logo -->
      <a href="../pages/dashboard.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>R</b>M</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>River</b>Mon</span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="../dist/img/avatar5.png" class="user-image" alt="User Image">
                <span class="hidden-xs"><?php echo $_SESSION['username']; ?></span>
              </a>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="logout.php"><i class="glyphicon glyphicon-off"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $_SESSION['username']; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>
          <li>
            <a href="../pages/dashboard.php">
              <i class="fa fa-dashboard">
              </i> <span>Dashboard</span></a>
          </li>
          <li class="header">MANAGE</li>
          <li><a href="../pages/device.php"><i class="fa fa-archive"></i> <span>Device</span></a></li>
          <li><a href="../pages/titik.php"><i class="fa fa-location-arrow"></i> <span>Log Sensor</span></a></li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-server"></i>
              <span>Data</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="../pages/titik.php"><i class="fa fa-circle-o"></i> Statis</a></li>
              <li><a href="../pages/grafik.php"><i class="fa fa-circle-o"></i> Grafik</a></li>
            </ul>
          </li>
          <li><a href="../pages/about.php"><i class="fa fa-edit"></i> <span>About</span></a></li>
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>