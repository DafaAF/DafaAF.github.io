<?php
 $nis = $_POST['nis'];
 $nama = $_POST['nama'];
 $kelas = $_POST['kelas'];

include("koneksi.php");
 $query = $database->query("insert into siswa values('$nis','$nama','$kelas')");

 if($query){
    header("Location:table.php");
 }
 ?>