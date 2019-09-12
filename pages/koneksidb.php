<?php
        DEFINE ('DBUSER', '2603033_arduino');
        DEFINE ('DBPW', 'siskom1234');
        DEFINE ('DBHOST', 'fdb19.awardspace.net');
        DEFINE ('DBNAME', '2603033_arduino');
        
  $dbc = mysqli_connect(DBHOST, DBUSER, DBPW);
  
  if(!$dbc)
  {
          die("koneksi ke database gagal dilakukan : ". mysqli_error($dbc));
          exit();
   }
   
   $dbs = mysqli_select_db($dbc, DBNAME);
   if(!$dbs)
   {
          die("Nama database tidak dikenal : ". mysqli_error($dbc));
          exit();
   }
