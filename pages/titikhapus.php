<?php
	//put file which is connected to database
	include "koneksi.php";

	//take all parameters through get method
	$id = $_GET['id'];
	//delete data from database based on nim
	$query = mysqli_query($koneksi, "DELETE FROM logsensor WHERE id_data='$id'") or die(mysqli_error());

	if ($query) {
		header('location:titik.php?message=delete');
	}
