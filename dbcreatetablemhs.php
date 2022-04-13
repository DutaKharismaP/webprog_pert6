<?php
// membuat table:
// 1. koneksi ke server database dan membbuka database
// 2. script sql create table
// table: mhs
// field: NIM varchar[8], nama varchar[40], jurusan varchar[20], JK enum, tgllahir date, passcode varchar [10]
// 3. execute script point 2
// 4. cek status
// 5. close connection

include_once ("dbkoneksi2.php");

$sql = 'CREATE TABLE mhs(
    NIM VARCHAR (8) PRIMARY KEY,
    NAMA VARCHAR(30),
    JURUSAN VARCHAR(20),
    JK VARCHAR (1),
    TGLLAHIR DATE,
    PASSCODE VARCHAR (10)

);';

$hsl = mysqli_query($cnn, $sql);

if($hsl){
    echo "Pembuatan tabel <strong>mhs</strong> sukses<br>";
}else{
    echo "Pembuatan tabel <strong>mhs</strong>gagal<br>";
}

mysqli_close($cnn);