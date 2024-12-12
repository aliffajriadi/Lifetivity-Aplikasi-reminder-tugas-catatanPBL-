<?php 
    include "../asset/component/sidebar.php";
    $id_user = $_SESSION['id_user'];

?>
<h3 class="text-primary mb-5" ><b>Beranda, <?php echo ucfirst($nama_user);?></b></h3>
<div class="isi_catatan">
    <div class="d-flex justify-content-between content-title">
        <h2 class=""><b>Catatan</b></h2>
    </div>
    <?php 
        
        $get_catatan = mysqli_query($conn, "SELECT id_catatan, judul_catatan, isi_catatan FROM catatan WHERE id_user = '$id_user'");
        
        if(mysqli_num_rows($get_catatan)){
            $data_catatan = mysqli_fetch_all($get_catatan, MYSQLI_ASSOC);
            
            foreach($data_catatan as $data) {
    ?>

        <div class="tampil-catatan">
            <div class="judul-catatan"><?= $data['judul_catatan'] ?></div>
            <div class="isi-catatan"><?= $data['isi_catatan'] ?></div>
        </div>

    <?php
            } 
        } else {
            echo "Catatan Belum Dibuat";
        }
    ?>

</div>


<!-- Bagian Jadwal -->
<div class="isi_jadwal">
    <h2 class="content-title">Jadwal</h2>

    <?php 

        $get_jadwal = mysqli_query($conn, "SELECT judul_jadwal, isi_jadwal, tanggal_mulai, tanggal_selesai FROM jadwal");
        
        if(mysqli_num_rows($get_jadwal)) {
            $data_jadwal = mysqli_fetch_all($get_jadwal, MYSQLI_ASSOC);

            foreach($data_jadwal as $data) {

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
                        data-waktu-pengingat="<? $data['waktu_pengingat']?>"
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

<!-- Bagian Tugas -->
<div class="isi_tugas">
    <h2 class="content-title">Tugas</h2>

    <?php 
        $get_tugas = mysqli_query($conn, "SELECT id_tugas, judul_tugas, isi_tugas, tanggal_pengingat, waktu_pengingat FROM tugas");
        
        if(mysqli_num_rows($get_tugas)){
            $data_tugas = mysqli_fetch_all($get_tugas, MYSQLI_ASSOC);
            
            foreach($data_tugas as $data) {
    ?>

        <div class="tampil-tugas">
            <div class="judul-tugas"><?= $data['judul_tugas'];?></div>
            <div class="tanggal-tugas"><?= $data['tanggal_pengingat'];?> <?= $data['waktu_pengingat'];?></div>
            <div class="isi-tugas"><?= $data['isi_tugas'];?> </div>
            
            

        </div>


    <?php 
            }
        }else {
            echo "tidak ada tugas sama sekali";
        }
    ?>

</div>


<?php 
    include "../asset/component/footer.php";
?>