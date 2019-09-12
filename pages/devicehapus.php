<?php
	//put file which is connected to database
	include "koneksi.php";

	//take all parameters through get method
	$id_device = $_GET['id_device'];
	//delete data from database based on nim
	$query = mysqli_query($koneksi, "DELETE FROM devicedata WHERE id_device='$id_device'") or die(mysqli_error());

	if ($query) {
		header('location:device.php?message=delete');
	}
