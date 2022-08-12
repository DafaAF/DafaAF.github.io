<?php 

$nis = $_GET['id'];

include("koneksi.php");
$query =$database->query("DELETE FROM siswa where nis='$nis'");


if($query){
   header("Location:table.php");
}