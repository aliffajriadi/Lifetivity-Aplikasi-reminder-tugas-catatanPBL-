<?php 

    include "../koneksi.php";
    include "../session.php";

    $id_tugas = $_GET["id_tugas"];

    $execute = mysqli_query($conn, "DELETE FROM tugas WHERE id_tugas = '$id_tugas'");

    if($execute) {
        echo "<script>
            alert('Tugas Berhasil Dihapus');
            window.location.href = '../../tugas/';
            </script>";
    }else{
        echo "<script>
            alert('Tugas Gagal Dihapus');
            window.location.href = '../../tugas/';
            </script>";
    }    

?>