<?php
// membuat data ke tabel mhs:
// 1. buat koneksi
// 2. buat script sql insert data ke tabel mhs
//  NIM, NAMA, JURUSAN, TGLLAHIR, JK, PASSCODE
// 3. execute point 2
// 4. cek status
// 5. close connection

if(isset($_POST["txNIM"]));
include_once("dbkoneksi2.php");

$nim = $_POST["txNIM"];
$nama = $_POST["txNAMA"];
$talag = $_POST["txTALAG"];
$jk = $_POST["txJK"];
$jur = $_POST["txJUR"];
$pass = $_POST["txPASS"];

$sqlinsert = "INSERT INTO mhs(NIM, NAMA,JURUSAN,JK,TGLLAHIR,PASSCODE) VALUES
('".$nim."','".$nama."','".$jur."','".$jk."','".$talag."','".$pass."');";

$hsl = mysqli_query($cnn, $sqlinsert);

if($hsl){
    echo "insert data sukses<br>";
}else{
    echo "insert data gagar<br>";
}

mysqli_close($cnn);