<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>River Monitoring</title>
  <link rel="icon" type="image/png" href="../dist/img/icon.png" sizes="32x32">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <script type="text/javascript" src="../bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript" src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../plugins/iCheck/icheck.min.js"></script>

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition" background="../dist/img/login.jpg">
  <div class="container">
    <div class="row"><br>
      <center>
        <img src="../dist/img/logo.png" width="auto" height="35px">
      </center>
      <div class="login-box">
        <div class="login-logo">
          <center> <a href="../pages/login.php" style="color:#F4F4F4;font-family:Product Sans;"><b>River</b> Monitoring</a> </center>
        </div>

        <div class="login-box-body">
          <p class="login-box-msg">Login Sesion</p>

          <form method="post" action="../pages/ceklogin.php" class="login">
            <fieldset>
              <div class="form-group has-feedback">
                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
              </div>
              <div class="form-group has-feedback">
                <input class="form-control" placeholder="Password" name="password" type="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-md-8"></div>
                <!-- /.col -->
                <div class="col-xs-4">
                  <input class="btn btn-success btn-block btn-flat" type="submit" name="login" value="Login">
                </div>
              </div>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
<footer>
  <p align="center" style="color:#F4F4F4;font-family:Product Sans;">
    <smooth>Copyright &copy; 2018 Kerja Praktek NGI 2018.</smooth> All rights
    reserved.
  </p>
</footer>

</html>