<?php 
include '../koneksi.php';
include '../session.php';

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $judul = $_POST['judul'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_berakhir = $_POST['tanggal_berakhir'];
    $waktu_pengingat = $_POST['waktu_pengingat'];
    $id_user = $_SESSION['id_user'];

    if (isset($_POST['list_hari']) && is_array($_POST['list_hari'])) {
        $data_jadwal = $_POST['list_hari'];
    } else {
        $data_jadwal = [];
    }

    $list_hari = [0, 0, 0, 0, 0, 0, 0]; 
    foreach ($data_jadwal as $index => $hari) {
        $list_hari[$index] = 1;  
    }


    $execute = "
        UPDATE jadwal 
        SET 
            judul_jadwal = '$judul',
            tanggal_mulai = '$tanggal_mulai',
            tanggal_berakhir = '$tanggal_berakhir',
            waktu_pengingat = '$waktu_pengingat',
            senin = {$list_hari[0]},
            selasa = {$list_hari[1]},
            rabu = {$list_hari[2]},
            kamis = {$list_hari[3]},
            jumat = {$list_hari[4]},
            sabtu = {$list_hari[5]},
            minggu = {$list_hari[6]}
        WHERE id_user = $id_user
    ";

 
    if (mysqli_query($conn, $execute)) {
        echo "<script>
                    alert('Data Berhasil Diubah');
                    window.location.href = '../../catatan/';
            </script>";
    } else {
        echo "<script>
                    alert('Data Berhasil Diubah');
                    window.location.href = '../../catatan/';
            </script>" . mysqli_error($conn);
    }
}
?>
