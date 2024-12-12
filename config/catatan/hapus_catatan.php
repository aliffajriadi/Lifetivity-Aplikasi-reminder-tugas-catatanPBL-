<?php 
    include "../koneksi.php";
    include "../session.php";

    $id_catatan = $_GET['id_catatan'];

    $execute = mysqli_query($conn, "DELETE FROM catatan WHERE id_catatan = '$id_catatan'");

    if($execute) {
        echo "<script>
                    alert('Catatan Berhasil Dihapus');
                    window.location.href = '../../catatan';
            </script>";
    }else{
        echo "<script>
                    alert('Catatan Gagal Dihapus');
                    window.location.href = '../../catatan';
            </script>";
    }
?>