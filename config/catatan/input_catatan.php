<?php 
    include '../koneksi.php';
    include '../session.php';

    $judul_catatan = $_POST['catatan_judul'];
    $isi_catatan = $_POST['catatan_isi'];
    $id_user = $_SESSION['id_user'];

    $execute = mysqli_query($conn, "INSERT INTO catatan(judul_catatan, isi_catatan, id_user) values ('$judul_catatan', '$isi_catatan', '$id_user')");

    if($execute) {
        echo "<script>
                    alert('Data Berhasil Disimpan');
                    window.location = '../../catatan';
            </script>";
    }else{
        echo "<script>
                    alert('Data Gagal Disimpan');
                    window.location = '../../catatan';
                    </script>";
    }

?>
