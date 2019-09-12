<?php
session_start();
include "koneksi.php";
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
  header("location:ceklogin.php");
}
?>
<!DOCTYPE html>
<meta http-equiv="refresh" content="60">
<?php include("../pages/header.php"); ?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard
      <small>Monitoring</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="col-md-4">
      <div class="box box-primary">
        <div class="box-header">
          <i class="fa fa-edit"></i>
          <h3 class="box-title">Status</h3>
        </div>
        <div class="box-body">
          <div class="small-box bg-olive">
            <div class="inner">
              <h3>
                <?php
                include_once("koneksi.php");
                foreach ($koneksi->query('SELECT COUNT(*) FROM logsensor') as $row) {
                  echo $row['COUNT(*)'];
                }
                ?></h3>
              <p>Data Online</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-code-o"></i>
            </div>
            <a href="../pages/titik.php" class="small-box-footer">Info Lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
          <div class="small-box bg-maroon">
            <div class="inner">
              <h3>
                <?php
                include_once("koneksi.php");
                foreach ($koneksi->query('SELECT COUNT(*) FROM devicedata') as $row) {
                  echo $row['COUNT(*)'];
                }
                ?></h3>
              </h3>
              <p>Total Device</p>
            </div>
            <div class="icon">
              <i class="fa fa-cogs"></i>
            </div>
            <a href="../pages/device.php" class="small-box-footer">Info Lanjut <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-8">
      <div class="box box-warning">
        <div class="box-header">
          <i class="fa fa-map"></i>
          <h3 class="box-title">Nusantara Global Inovasi</h3>
        </div>
        <div class="box-body">
          <center>
            <iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.650907900511!2d110.41141102145541!3d-6.9812545409924995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4de32db3a5%3A0xab25dde3338ccffc!2sGriya+Bina+Artha%2C+Jl.+Pemuda+No.142%2C+Sekayu%2C+Semarang+Tengah%2C+Kota+Semarang%2C+Jawa+Tengah+50132!5e0!3m2!1sid!2sid!4v1525319219024" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
          </center>
        </div>
      </div>
    </div>
  </section>
</div>
<?php include("../pages/footer.php"); ?>