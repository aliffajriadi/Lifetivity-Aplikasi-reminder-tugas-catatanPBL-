<?php 
    include "../asset/component/sidebar.php";
    $id_user = $_SESSION['id_user'];


    

?>
<h3 class="text-primary mb-5" ><b>Halaman Profil, <?php echo ucfirst($nama_user);?></b></h3>

<div class="d-flex justify-content-center m-5">
    <div class="border p-4 rounded shadow-sm">
        <h5 class="mb-3">Nama : <?php echo $nama_user ?></h5>
        
    </div>
</div>



<?php 
    include "../asset/component/footer.php";
?>