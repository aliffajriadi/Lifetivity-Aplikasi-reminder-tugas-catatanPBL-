<?php 

    include "../koneksi.php";
    include "../session.php";

    $id_jadwal = $_POST["id_jadwal"];

    $execute = mysqli_query($conn, "DELETE FROM jadwal WHERE id_jadwal = '$id_jadwal'");

    if ($execute) {
        echo "<script>alert('Jadwal Berhasil dihapus'); 
            window.location('../../dashboard/')</script>";
    } else {
        echo "<script>alert('Jadwal Gagal Dihapus'); 
            window.location('../../dashboard/')</script>";
    }
?>