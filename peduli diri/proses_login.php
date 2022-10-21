<?php
    include("koneksi.php");


    $nama = $_REQUEST["nama"];
    $password = $_REQUEST["password"];



    $query = $db->query("select * from user_form where nama='$nama' AND password='$password'")->fetchAll();
    
    if ($query){
        $_SESSION["nama"] = $_REQUEST['nama'];
        $_SESSION["password"] = $_REQUEST['password'];
        header("Location:index.php");
    }
    else{
        header("Location:login.php");
    }
?>