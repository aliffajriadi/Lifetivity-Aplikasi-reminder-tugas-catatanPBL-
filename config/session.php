<?php
session_start(); 


if (!isset($_SESSION['username'])) {
    
    echo "<script>alert('Silahkan login terlebih dahulu'); window.location = '../login/';</script>";
    exit();
}
$nama_user = $_SESSION['username'];

?>
