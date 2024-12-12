<?php
include "../asset/component/sidebar.php";
$id_user = $_SESSION['id_user'];

?>

<!-- Bagian Tugas -->
<div class="isi_tugas">
    <div class="d-flex justify-content-between content-title">
        <h2 class=""><b>Halaman Tugas, <?php echo ucfirst($nama_user) ?></b></h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_tugas">
            Tambah Tugas
        </button>

    </div>
    <?php
    $get_tugas = mysqli_query($conn, "SELECT id_tugas, judul_tugas, isi_tugas, tanggal_pengingat, waktu_pengingat FROM tugas");

    if (mysqli_num_rows($get_tugas)) {
        $data_tugas = mysqli_fetch_all($get_tugas, MYSQLI_ASSOC);

        foreach ($data_tugas as $data) {
    ?>

            <div class="tampil-tugas pb-5">
                <div class="d-flex justify-content-between">
                    <div class="judul-tugas"><?= $data['judul_tugas']; ?></div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="../config/tugas/hapus_tugas.php?id_tugas=<?= $data['id_tugas'] ?> " class="dropdown-item">Hapus Tugas</a></li>
                            <li><button class="btn dropdown-item"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modal_edit_tugas"
                                    data-id-tugas="<?= $data['id_tugas'] ?>"
                                    data-judul-tugas="<?= $data['judul_tugas'] ?>"
                                    data-tanggal-pengingat="<?= $data['tanggal_pengingat'] ?>"
                                    data-waktu-pengingat="<?= $data['waktu_pengingat'] ?>"
                                    data-isi-tugas="<?= $data['isi_tugas'] ?>">
                                    <i class="fas fas-edit"></i> Edit Tugas
                                </button></li>
                            </button></li>

                        </ul>
                    </div>

                </div>
                <div class="tanggal-tugas"><?= $data['tanggal_pengingat']; ?> <?= $data['waktu_pengingat']; ?></div>
                <div class="isi-tugas"><?= $data['isi_tugas']; ?> </div>

               

            </div>


    <?php
        }
    } else {
        echo "tidak ada tugas sama sekali";
    }
    ?>

</div>


<?php
include "../asset/component/footer.php";
?>