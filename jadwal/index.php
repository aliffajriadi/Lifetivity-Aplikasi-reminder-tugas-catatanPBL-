<?php
include "../asset/component/sidebar.php";
$id_user = $_SESSION['id_user'];

?>

<!-- Bagian Jadwal -->
<div class="isi_jadwal">
    <div class="d-flex justify-content-between content-title">
        <h2 class=""><b>Halaman Jadwal, <?php echo ucfirst($nama_user) ?></b></h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_jadwal">
            Tambah Jadwal
        </button>

    </div>
    <?php

    $get_jadwal = mysqli_query($conn, "SELECT judul_jadwal, isi_jadwal, tanggal_mulai, tanggal_selesai FROM jadwal");

    if (mysqli_num_rows($get_jadwal)) {
        $data_jadwal = mysqli_fetch_all($get_jadwal, MYSQLI_ASSOC);

        foreach ($data_jadwal as $data) {

    ?>

            <div class="tampil-jadwal">
                <div class="judul-jadwal"><?= $data["judul_jadwal"]; ?></div>
                <div class="tanggal-jadwal"><?= $data["tanggal_mulai"] ?> - <?= $data["tanggal_selesai"] ?></div>
                <div class="isi-jadwal"><?= $data["isi_jadwal"] ?></div>

                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <a href="../config/jadwal/hapus_jadwal.php?id_jadwal=<?= $data['id_jadwal'] ?>" class="btn btn-danger">Hapus</a>

                    <button class="btn btn-success btn-sm me-1 edit-button edit-jadwal"
                        data-bs-toggle="modal"
                        data-bs-target="#modal_edit_jadwal"
                        data-id-jadwal="<?= $data['id_jadwal'] ?>"
                        data-judul-jadwal="<?= $data['judul_jadwal'] ?>"
                        data-tanggal-mulai="<?= $data['tanggal_mulai'] ?>"
                        data-tanggal-selesai="<?= $data['tanggal_selesai'] ?>"
                        data-waktu-pengingat="<? $data['waktu_pengingat'] ?>"
                        data-isi-jadwal="<?= $data['isi_jadwal'] ?>"
                        data-senin="<?= $data['senin'] ?>"
                        data-selasa="<?= $data['selasa'] ?>"
                        data-rabu="<?= $data['rabu'] ?>"
                        data-kamis="<?= $data['kamis'] ?>"
                        data-jumat="<?= $data['jumat'] ?>"
                        data-sabtu="<?= $data['sabtu'] ?>"
                        data-minggu="<?= $data['minggu'] ?>">
                        <i class="fas fas-edit"></i>Edit
                    </button>

                </div>


            </div>

    <?php
        }
    } else {
        echo "Belum ada jadwal dibuat :)";
    }
    ?>

</div>


<?php
include "../asset/component/footer.php";
?>