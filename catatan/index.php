<?php
include "../asset/component/sidebar.php";
$id_user = $_SESSION['id_user'];

?>
<div class="isi_catatan">
    <div class="d-flex justify-content-between content-title">
        <h2 class=""><b>Halaman Catatan, <?php echo ucfirst($nama_user) ?></b></h2>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_catatan">
            Tambah Catatan
        </button>
        
    </div>

    <?php

    $get_catatan = mysqli_query($conn, "SELECT id_catatan, judul_catatan, isi_catatan FROM catatan WHERE id_user = '$id_user'");

    if (mysqli_num_rows($get_catatan)) {
        $data_catatan = mysqli_fetch_all($get_catatan, MYSQLI_ASSOC);

        foreach ($data_catatan as $data) {
    ?>

            <div class="tampil-catatan pb-5">
                <div class="judul-catatan d-flex justify-content-between">
                    <?= $data['judul_catatan'] ?>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Menu
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="../config/catatan/hapus_catatan.php?id_catatan=<?= $data['id_catatan'] ?>" data-id-catatan="<?= $data["id_catatan"]; ?>" class="btn dropdown-item">Hapus Catatan</a></li>
                            <li><button class="btn dropdown-item"
                                    data-bs-toggle="modal"
                                    data-bs-target="#modal_edit_catatan"
                                    data-id-catatan="<?= $data['id_catatan'] ?>"
                                    data-judul-catatan="<?= $data['judul_catatan'] ?>"
                                    data-isi-catatan="<?= $data['isi_catatan'] ?>">
                                    <i class="fas fas-edit"></i>Edit Catatan
                                </button></li>
                        </ul>
                    </div>
                </div>
                <div class="isi-catatan"><?= $data['isi_catatan'] ?></div>

                


            </div>

    <?php
        }
    } else {
        echo "Catatan Belum Dibuat";
    }
    ?>

</div>




<?php
include "../asset/component/footer.php";
?>