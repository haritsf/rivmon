<?php
  include "koneksi.php";
  $id_device = $_POST['id_device'];
  $nama_device = $_POST['nama_device'];
  $status = $_POST['status'];
  $latitude = $_POST['latitude'];
  $langitude = $_POST['langitude'];
  $lokasi = $_POST['lokasi'];

  $query = mysqli_query($koneksi, "INSERT INTO devicedata VALUES ($id_device, '$nama_device', '$lokasi', '$latitude','$langitude','$status')") or die(mysqli_error($koneksi));
	if ($query) {
		header('location:device.php?message=success');
	}
  exit();
?>
