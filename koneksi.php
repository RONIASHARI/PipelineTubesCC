<?php
  $dbhost = "172.19.0.2";
  $dbuser = "root";
  $dbpass = "pw";
  $dbname = "tubes_pemweb";
  $connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
  
  if(!$connection){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno()." - ".mysqli_connect_error());
  } else {
    //echo "Koneksi berhasil";
  }
?>
