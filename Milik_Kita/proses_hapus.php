<?php 

$id = $_GET['id'];

include("koneksi.php");
$query = $koneksi->query("DELETE FROM siswa where nis='$id'");


if($query){
   header("Location:table.php");
}