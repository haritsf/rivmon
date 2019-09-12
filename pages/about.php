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
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      About
      <small>Project</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">About</li>
    </ol>
  </section>

  <section class="content">
    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="../dist/img/avaniyya.jpg" alt="User profile picture">
          <h1 class="profile-username text-center">Ama<b>niyya</b> Addini H.</h1>
          <p class="text-muted text-center">Arduino</p>
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>NIM</b> <a class="pull-right">21120115120027</a>
            </li>
            <li class="list-group-item">
              <b>Dept</b> <a class="pull-right">Teknik Komputer</a>
            </li>
            <li class="list-group-item">
              <b>Angkatan</b> <a class="pull-right">2015</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="../dist/img/avazaka.jpg" alt="User profile picture">
          <h1 class="profile-username text-center">Ghiffari <b>Zaka</b></h1>
          <p class="text-muted text-center">Arduino</p>
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>NIM</b> <a class="pull-right">21120115120004</a>
            </li>
            <li class="list-group-item">
              <b>Dept</b> <a class="pull-right">Teknik Komputer</a>
            </li>
            <li class="list-group-item">
              <b>Angkatan</b> <a class="pull-right">2015</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="../dist/img/avarama.jpg" alt="User profile picture">
          <h1 class="profile-username text-center">Arenda<b>rama</b> Danuarta</h1>
          <p class="text-muted text-center">Server</p>
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>NIM</b> <a class="pull-right">21120115130060</a>
            </li>
            <li class="list-group-item">
              <b>Dept</b> <a class="pull-right">Teknik Komputer</a>
            </li>
            <li class="list-group-item">
              <b>Angkatan</b> <a class="pull-right">2015</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="box box-primary">
        <div class="box-body box-profile">
          <img class="profile-user-img img-responsive img-circle" src="../dist/img/avaharits.jpg" alt="User profile picture">
          <h1 class="profile-username text-center"><b>Harits</b> Fathuddin</h1>
          <p class="text-muted text-center">Web App</p>
          <ul class="list-group list-group-unbordered">
            <li class="list-group-item">
              <b>NIM</b> <a class="pull-right">21120115130074</a>
            </li>
            <li class="list-group-item">
              <b>Dept</b> <a class="pull-right">Teknik Komputer</a>
            </li>
            <li class="list-group-item">
              <b>Angkatan</b> <a class="pull-right">2015</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

  </section>
</div>
<!-- /.content-wrapper -->
<?php include("../pages/footer.php"); ?>