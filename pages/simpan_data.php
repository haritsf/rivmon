<?php
  date_default_timezone_set("Asia/Jakarta");
  include_once("koneksidb.php");
        
       $ok = true;
        if(! isset ($_POST['inchi']))
          $ok = false;
        if(! isset ($_POST['senti']))
          $ok = false;
        if(! isset ($_POST['id_device']))
          $ok = false;


        if(! $ok)
        {
          print("Salah penggunaan!");
          exit();
        }

        $waktu = date("Y-m-d H:i:s");
        $inchi = $_POST['inchi'];
        $senti = $_POST['senti'];
        $id_device = $_POST['id_device'];

        $hasil = mysqli_query($dbc, "INSERT INTO logsensor (id_device, waktu, inchi, senti) VALUES ('".$id_device."','".$waktu."','".$inchi."','".$senti."')");

        if ($hasil)
           print ("Data berhasil disimpan");
        else
           print ("Data gagal disimpan");

        exit();
