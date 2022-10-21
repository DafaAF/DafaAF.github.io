<?php
include("koneksi.php");

$nama = $_REQUEST['nama'];
$password = $_REQUEST['password'];

$query = $db->query("INSERT INTO user_form VALUES(null, '$nama','$password')");


header("Location:login.php");

?>

