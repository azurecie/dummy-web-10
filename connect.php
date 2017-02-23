<?php
$host = "ap-cdbr-azure-southeast-b.cloudapp.net";
$user = "b7b3f583cc2f18";
$pass = "2fecb81d";
$name = "aditdatabasedb";
 
$koneksi = mysql_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>
