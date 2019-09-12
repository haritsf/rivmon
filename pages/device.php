<?php
session_start();
include "koneksi.php";
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
  header("location:ceklogin.php");
}
?>
<?php include("../pages/header.php"); ?>
<script type="text/javascript" charset="utf-8">
  $(document).ready(function() {
    $('#dataDevice').dataTable({
      'paging': true,
      'lengthChange': true,
      'searching': true,
      'ordering': true,
      'info': true,
      'autoWidth': false
    });
  });
</script>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Device
      <small>Data</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Device</li>
    </ol>
  </section>

  <div class="content">
    <div class="row">
      <div class="col-lg-12">
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#collTambah"><b>+</b></button>
        <h2></h2>
        <!--///////////// Begin of CollapseTambah /////////////-->
        <div class="box box-info collapse" id="collTambah" style="margin-top: 20px;">
          <div class="box-header with-border">
            <h3 class="box-title">Tambah Data Alat</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <form method="post" action="simpan.php">
              <div class="col-sm-6">
                <table class="table borderless">
                  <tr>
                    <th width="30%">ID Alat</th>
                    <td width="3%">:</td>
                    <td><input type="text" name="id_device" class="form-control input-sm" onkeypress='return event.charCode >= 48 && event.charCode <= 57' required></td>
                  </tr>
                  <tr>
                    <th>Nama Alat</th>
                    <td>:</td>
                    <td><input type="text" name="nama_device" class="form-control input-sm" required=""></td>
                  </tr>
                  <tr>
                    <th>Status</th>
                    <td>:</td>
                    <td>
                      <select class="form-control input-sm" name="status" required="">
                        <option value="Tidak Aktif">Tidak Aktif</option>
                        <option value="Aktif">Aktif</option>
                      </select>
                    </td>
                  </tr>
                </table>
              </div>

              <div class="col-sm-6">
                <table class="table borderless">
                  <tr>
                    <th>Latitude</th>
                    <td>:</td>
                    <td><input type="text" name="latitude" class="form-control input-sm" required=""></td>
                  </tr>
                  <tr>
                    <th>Langitude</th>
                    <td>:</td>
                    <td><input type="text" name="langitude" class="form-control input-sm" required=""></td>
                  </tr>
                  <tr>
                    <th>Lokasi</th>
                    <td>:</td>
                    <td><input type="text" name="lokasi" class="form-control input-sm" required=""></td>
                  </tr>

                  <tr>
                    <td colspan="3">
                      <button type="submit" name="simpan" class="btn btn-info pull-right">Proses</button>
                    </td>
                  </tr>
                </table>
            </form>
          </div>
        </div>
        <!-- /.box-body -->
      </div>

      <!--///////////// End of CollapseTambah /////////////-->

      <!-- building table to put the data -->
      <div class="panel panel-default">
        <div class="panel-heading">
          Informasi Alat
        </div>

        <div class="panel-body">
          <div class="table-responsive">
            <table width="30%" class="table table-bordered table-hover" id="dataDevice">
              <thead>
                <tr>
                  <th width="10%">
                    <center>ID Device</center>
                  </th>
                  <th>
                    <center>Nama</center>
                  </th>
                  <th>
                    <center>Lokasi</center>
                  </th>
                  <th>
                    <center>Latitude</center>
                  </th>
                  <th>
                    <center>Langitude</center>
                  </th>
                  <th>
                    <center>Status</center>
                  </th>
                  <th width="15%">
                    <center>Options</center>
                  </th>
                </tr>
              </thead>

              <tbody>
                <?php
                include_once("koneksi.php");
                date_default_timezone_set("Asia/Jakarta");
                $hasil = mysqli_query($koneksi, "SELECT * FROM devicedata");
                while ($baris = mysqli_fetch_row($hasil)) {
                  $id_device = $baris[0];
                  $nama_device = $baris[1];
                  $lokasi = $baris[2];
                  $latitude = $baris[3];
                  $langitude = $baris[4];
                  $status = $baris[5];

                  ?>
                  <tr align="center">
                    <!-- put data which we want to show via table -->
                    <td><?php print("$id_device"); ?></td>
                    <td><?php print("$nama_device"); ?></td>
                    <td><?php print("$lokasi"); ?></td>
                    <td><?php print("$latitude"); ?></td>
                    <td><?php print("$langitude"); ?></td>
                    <td><?php print("$status"); ?></td>
                    <td align="center">
                      <a type="button" class="btn btn-warning btn-md" href='edevice.php?&id_device=<?php print("$id_device"); ?>'><i class="fa fa-exclamation"></i></a>
                      <a type="button" onclick="return confirm('Anda ingin menghapus Device?');" class="btn btn-danger btn-md" href='devicehapus.php?&id_device=<?php print("$id_device"); ?>'><i class="fa fa-trash-o"></i></a>
                    </td>
                  </tr>
                <?php
                }
                exit();
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /.content-wrapper -->
<?php include("../pages/footer.php"); ?>