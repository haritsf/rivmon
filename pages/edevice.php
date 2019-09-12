<?php
session_start();
include "koneksi.php";
if (empty($_SESSION['username']) and empty($_SESSION['password'])) {
  header("location:ceklogin.php");
}
?>
<?php include("../pages/header.php"); ?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Edit
      <small>Device</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="../pages/dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Device</li>
      <li class="active">Edit</li>
    </ol>
  </section>

  <div class="content">
    <div class="row">
      <div class="col-lg-12">
        <?php
        $id_device = $_GET['id_device'];
        date_default_timezone_set("Asia/Jakarta");
        $hasil = mysqli_query($koneksi, "SELECT * FROM devicedata WHERE id_device='$id_device'");
        while ($baris = mysqli_fetch_row($hasil)) {
          $id_device = $baris[0];
          $nama_device = $baris[1];
          $lokasi = $baris[2];
          $latitude = $baris[3];
          $langitude = $baris[4];
          $status = $baris[5];
          ?>
          <form class="form-horizontal" action="editsave.php?id_device=<?php print("$id_device"); ?>" method="post" role="form">

            <div class="form-group">
              <label class="col-sm-2 control-label">ID Device</label>
              <div class="col-sm-4">
                <input class="form-control" name="id_device" type="number" value="<?php print("$id_device"); ?>" disabled>
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Nama</label>
              <div class="col-sm-4">
                <input class="form-control" name="nama" type="text" value="<?php print("$nama_device"); ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Lokasi</label>
              <div class="col-sm-4">
                <input class="form-control" name="lokasi" type="text" value="<?php print("$lokasi"); ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Latitude</label>
              <div class="col-sm-4">
                <input class="form-control" name="latitude" type="text" value="<?php print("$latitude"); ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Langitude</label>
              <div class="col-sm-4">
                <input class="form-control" name="langitude" type="text" value="<?php print("$langitude"); ?>">
              </div>
            </div>

            <div class="form-group">
              <label class="col-sm-2 control-label">Status</label>
              <div class="col-sm-4">
                <select class="form-control" name="status" value="<?php print("$status"); ?>">
                  <option value="<?php print("$status"); ?>"><?php print("$status"); ?></option>
                  <?php if ($status == "Aktif") { ?>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                  <?php  } elseif ($status != "Aktif") { ?>
                    <option value="Aktif">Aktif</option>
                  <?php  } ?>
                </select>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-4">
                <a type="button" class="btn btn-info btn-md" href="https://www.google.co.id/maps/search/<?php print("$latitude"); ?>,<?php print("$langitude"); ?>" target="_blank">Lihat Lokasi</a>
                <button type="submit" class="btn btn-success" value="Simpan Perubahan">Simpan Perubahan</button>
              </div>
            </div>

          <?php }
          exit(); ?>

          </form>
      </div>
    </div>
  </div>
</div>
<?php include("../pages/footer.php"); ?>