<?php
// membuat koneksi
// 1. menyiapkan lokasi server, user name dan password
// 2. test koneksi

include_once("konfigurasi.php");

// echo DBHOST;
// echo DBUSER;

$cnn = mysqli_connect(DBHOST,DBUSER,DBPASCODE, DBNAME, DBPORT) or die("Koneksi ke DBMS Mysql GAGAL <br>");
echo "Koneksi ke DBMS Mysql Sukses<br>";
