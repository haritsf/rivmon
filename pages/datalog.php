<?php
header('Content-Type: application/json');

include_once("koneksi.php");


$query = sprintf("SELECT waktu, senti, inchi FROM logsensor ORDER BY id_data DESC LIMIT 7");

$result = $koneksi->query($query);

$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

$result->close();
$koneksi->close();

print json_encode($data);
