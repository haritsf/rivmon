<?php
session_start();
include "koneksi.php";
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
  header("location:ceklogin.php");
}
?>
<!DOCTYPE html>
<!-- Content Wrapper. Contains page content -->
<?php include("../pages/header.php"); ?>
<script type="text/javascript" src="../dist/js/Chart.min.js"></script>
<script type="text/javascript" src="../dist/js/linegraph.js"></script>
<style>
  .chart-container {
    width: 960px;
    height: auto;
  }
</style>
<meta http-equiv="refresh" content="10">
<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Realtime
        <small>Data</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data</li>
        <li class="active">Grafik</li>
      </ol>
    </section>

    <section class="content">
      <div class="col-md-12">
        <div class="box box-primary">
          <div class="box-header">
            <i class="fa fa-area-chart"></i>
            <h3 class="box-title">Grafik Log Sensor</h3>
          </div>
          <center>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="chart-container" style="position: relative; height:100%; width:90%">
                  <canvas id="mycanvas"></canvas>
                </div>
              </div>
            </div>

            <!-- </div> -->
          </center>
        </div>
      </div>
    </section>
  </div>
</div>
<!-- /.content-wrapper -->
</body>
<!-- <?php include("../pages/footer.php"); ?> -->