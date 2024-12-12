<?php 

    include "../koneksi.php";
    include "../session.php";

    $judul_tugas = $_POST["judul_tugas"] ;
    $isi_tugas = $_POST["isi_tugas"];

    $tanggal_pengingat = $_POST["tanggal_pengingat"];
    $jam_pengingat = $_POST["waktu_pengingat"];

    // $id_pengguna = $_SESSION['id_pengguna']; -> diambil dari session user

    $execute = mysqli_query($conn, "INSERT INTO tugas(judul_tugas, isi_tugas, tanggal_pengingat, waktu_pengingat) 
    VALUES ('$judul_tugas', '$isi_tugas', '$tanggal_pengingat', '$jam_pengingat')");

    if($execute){
        echo "<script>alert('tugas berhasil di input');</script>";
        header("Location: ../../tugas/");
    }else{
        echo "<script>alert('tugas gagal di input');</script>";
        header("Location: ../../tugas/");
    }

?>