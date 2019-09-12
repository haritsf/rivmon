<?php
	session_start();
	include 'koneksi.php';

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);
	$_SESSION['username'] = $username;
	$_SESSION['password'] = $password;
	$_SESSION['logout'] = $username;

	$query = mysqli_query($koneksi, "SELECT * FROM userdata WHERE user='$username' AND pass='$password'");
	$cek = mysqli_num_rows($query);
	// echo $cek;
	// die();
	if($cek>0){
		$_SESSION['username'] = $username;
		$_SESSION['password'] = $password;
		header("location:dashboard.php");
	}else{
		echo "<script type='text/javascript'>";
 		echo "window.reload;";
 		$message = "Password/Username Salah";
		echo "alert('$message');";
		echo "window.history.back()";
		echo "</script>";
	}
