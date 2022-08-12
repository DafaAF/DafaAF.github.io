<?php

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

include("koneksi.php");
$query = $database->query("UPDATE `siswa` SET nama='$nama',id_kelas='$kelas' WHERE id='$id'");

 if($query){
    header("Location:koneksi.php");
 }