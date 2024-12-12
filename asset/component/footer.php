</section>

</div>


<!-- bagian yang tidak langsung muncul di web -->

<!-- modal input catatan -->
<div class="modal fade" id="modal_catatan" tabindex="1" aria-labelledby="modal_catatan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_catatan_label">Input Catatan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="../config/catatan/input_catatan.php" method="POST">

                <div class="modal-body">
                    <label for="catatan_judul" class="form-label">Judul</label>
                    <input type="text" name="catatan_judul" id="catatan_judul" class="form-control">

                    <label for="catatan_isi" class="form-label">Isi</label>
                    <textarea name="catatan_isi" id="catatan_isi" class="form-control"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- modal input tugas -->
<div class="modal fade" id="modal_tugas" tabindex="1" aria-labelledby="modal_tugas" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_catatan_label">Input Tugas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="../config/tugas/input_tugas.php" method="POST">

                <div class="modal-body">
                    <label for="tugas_judul" class="form-label">Judul</label>
                    <input type="text" name="judul_tugas" id="judul_tugas" class="form-control">

                    <label for="hari_tenggat" class="form-label">Hari tenggat</label>
                    <input type="date" name="tanggal_pengingat" id="tanggal_pengingat" class="form-control">

                    <label for="waktu_tenggat" class="form-label">Jam tenggat</label>
                    <input type="time" name="waktu_pengingat" id="waktu_pengingat" class="form-control">

                    <label for="catatan_isi" class="form-label">Isi</label>
                    <textarea name="isi_tugas" id="isi_tugas" class="form-control"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- Modal Input Jadwal -->
<div class="modal fade" id="modal_jadwal" tabindex="-1" aria-labelledby="modal_jadwal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_catatan_label">Input Jadwal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="../config/jadwal/input_jadwal.php" method="POST">
                <div class="modal-body">
                    <label for="judul_jadwal" class="form-label">Judul</label>
                    <input type="text" name="judul_jadwal" id="judul_jadwal" class="form-control" required>

                    <label for="tanggal_mulai" class="form-label">Tanggal Mulai</label>
                    <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control" required>

                    <label for="tanggal_berakhir" class="form-label">Tanggal Berakhir</label>
                    <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="form-control" required>

                    <label for="waktu_pengingat">Waktu</label>
                    <input type="time" name="waktu_pengingat" id="waktu_pengingat" class="form-control" required>

                    <label for="hari_melakukan">Dilakukan Pada Hari</label>
                    <div>
                        <!-- Checkbox for Days -->
                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="senin_input" name="list_hari[0]" class="form-check-input">
                            <label for="senin_input">Senin</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="selasa_input" name="list_hari[1]" class="form-check-input">
                            <label for="selasa_input">Selasa</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="rabu_input" name="list_hari[2]" class="form-check-input">
                            <label for="rabu_input">Rabu</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="kamis_input" name="list_hari[3]" class="form-check-input">
                            <label for="kamis_input">Kamis</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="jumat_input" name="list_hari[4]" class="form-check-input">
                            <label for="jumat_input">Jumat</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="sabtu_input" name="list_hari[5]" class="form-check-input">
                            <label for="sabtu_input">Sabtu</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" id="minggu_input" name="list_hari[6]" class="form-check-input">
                            <label for="minggu_input">Minggu</label>
                        </div>
                    </div>

                    <div>
                        <label for="isi_jadwal" class="form-label">Isi</label>
                        <textarea name="isi_jadwal" id="isi_jadwal" class="form-control"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modal_tantangan" tabindex="1" aria-labelledby="modal_catatan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_catatan_label">Input Kode Tantangan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="" method="POST">

                <div class="modal-body">
                    <label for="kode_tantangan" class="form-label">Masukkan kode tantangan</label>
                    <input type="text" name="kode_tantangan" id="kode_tantangan" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>


        </div>
    </div>
</div>


<!-- MODAL UNTUK EDIT -->

<!-- modal edit catatan -->
<div class="modal fade" id="modal_edit_catatan" tabindex="1" aria-labelledby="modal_catatan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <input type="hidden" name="id_catatan">

            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_catatan_label">Edit Catatan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="../config/catatan/edit_catatan.php" method="POST">

                <div class="modal-body">
                    <input type="hidden" name="id_catatan" id="edit_id_catatan">

                    <label for="catatan_judul" class="form-label">Judul</label>
                    <input type="text" name="judul_catatan" id="edit_judul_catatan" class="form-control">

                    <label for="catatan_isi" class="form-label">Isi</label>
                    <textarea name="isi_catatan" id="edit_isi_catatan" class="form-control"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- modal edit tugas -->
<div class="modal fade" id="modal_edit_tugas" tabindex="1" aria-labelledby="modal_tugas" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="tugas_label">Edit Tugas</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="../config/tugas/edit_tugas.php" method="POST">

                <div class="modal-body">
                    <input type="hidden" name="id_tugas" id="edit_id_tugas">

                    <label for="tugas_judul" class="form-label">Judul</label>
                    <input type="text" name="judul_tugas" id="edit_judul_tugas" class="form-control">

                    <label for="hari_tenggat" class="form-label">Hari tenggat</label>
                    <input type="date" name="tanggal_pengingat" id="edit_tanggal_pengingat" class="form-control">

                    <label for="waktu_tenggat" class="form-label">Jam tenggat</label>
                    <input type="time" name="waktu_pengingat" id="edit_waktu_pengingat" class="form-control">

                    <label for="catatan_isi" class="form-label">Isi</label>
                    <textarea name="isi_tugas" id="edit_isi_tugas" class="form-control"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>

        </div>
    </div>
</div>

<!-- modal input jadwal -->
<div class="modal fade" id="modal_edit_jadwal" tabindex="1" aria-labelledby="modal_jadwal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_catatan_label">Input jadwal</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="../config/tugas/input_jadwal.php" method="POST">

                <div class="modal-body">
                    <label for="tantangan_judul" class="form-label">Judul</label>
                    <input type="text" name="tantangan_judul" id="tantangan_judul" class="form-control">

                    <label for="tanggal_mulai" class="form-label">Tanggal mulai</label>
                    <input type="date" name="tanggal_mulai" id="tanggal_mulai" class="form-control">

                    <label for="tanggal_berakhir" class="form-label">Tanggal berakhir</label>
                    <input type="date" name="tanggal_berakhir" id="tanggal_berakhir" class="form-control">

                    <label for="waktu_pengingat">Waktu</label>
                    <input type="time" name="waktu_pengingat" id="waaktu_pengingat" class="form-control">

                    <label for="hari_melakukan">dilakukan pada hari</label>

                    <div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" name="list_hari[0]" id="senin_edit" class="form-check-input">
                            <label for="senin_edit">Senin</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" name="list_hari[1]" id="selasa_edit" class="form-check-input">
                            <label for="selasa_edit">Selasa</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" name="list_hari[2]" id="rabu_edit" class="form-check-input">
                            <label for="rabu_edit">Rabu</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" name="list_hari[3]" id="kamis_edit" class="form-check-input">
                            <label for="kmais_edit">Kamis</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" name="list_hari[4]" id="jumat_edit" class="form-check-input">
                            <label for="jumat_edit">Jumat</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" name="list_hari[5]" id="sabtu_edit" class="form-check-input">
                            <label for="sabtu_edit">Sabtu</label>
                        </div>

                        <div class="form-check form-check-inline">
                            <input type="checkbox" value="1" name="list_hari[6]" id="minggu_edit" class="form-check-input">
                            <label for="minggu_edit">Minggu</label>
                        </div>
                    </div>


                    <label for="catatan_isi" class="form-label">Isi</label>
                    <textarea name="catatan_isi" id="catatan_isi" class="form-control"></textarea>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>


        </div>
    </div>
</div>

<div class="modal fade" id="modal_edit_tantangan" tabindex="1" aria-labelledby="modal_catatan" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal_catatan_label">Input Kode Tantangan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
            </div>

            <form action="" method="POST">

                <div class="modal-body">
                    <label for="kode_tantangan" class="form-label">Masukkan kode tantangan</label>
                    <input type="text" name="kode_tantangan" id="kode_tantangan" class="form-control">
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                </div>
            </form>


        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script>

    // untuk edit catatan
    document.addEventListener('DOMContentLoaded', function () {
        const edit_buttons = document.querySelectorAll('.edit-catatan');
        edit_buttons.forEach(button => {
            button.addEventListener('click', function () {
                const id_catatan = this.getAttribute('data-id-catatan');
                const judul_catatan = this.getAttribute('data-judul-catatan');
                const isi_catatan = this.getAttribute('data-isi-catatan');

                document.getElementById('edit_id_catatan').value = id_catatan;
                document.getElementById('edit_judul_catatan').value = judul_catatan;
                document.getElementById('edit_isi_catatan').value = isi_catatan;
            })
        });
    });
    
    // untuk edit tugas
    document.addEventListener('DOMContentLoaded', function () {
        const edit_buttons = document.querySelectorAll('.edit-tugas');
        edit_buttons.forEach(button => {
            button.addEventListener('click', function () {
                const id_tugas = this.getAttribute('data-id-tugas');
                const judul_tugas = this.getAttribute('data-judul-tugas');
                const tanggal_pengingat = this.getAttribute('data-tanggal-pengingat');
                const waktu_pengingat = this.getAttribute('data-waktu-pengingat');
                const isi_tugas = this.getAttribute('data-isi-tugas');

                document.getElementById('edit_id_tugas').value = id_tugas;
                document.getElementById('edit_judul_tugas').value = judul_tugas;
                document.getElementById('edit_tanggal_pengingat').value = tanggal_pengingat;
                document.getElementById('edit_waktu_pengingat').value = waktu_pengingat;
                document.getElementById('edit_isi_tugas').value = isi_tugas;
            });
        });
    });

    // untuk edit jadwal
    document.addEventListener('DOMContentLoaded', function () {
        const edit_buttons =document.querySelectorAll('.edit-jadwal');
        edit_buttons.forEach(button => {
            button.addEventListener('click', function () {
                const id_jadwal = this.getAttribute('data-id-jadwal');
                const judul_jadwal= this.getAttribute('data-judul-jadwal');
                const isi_jadwal = this.getAttribute('data-isi-jadwal');
                const tanggal_mulai = this.getAttribute('data-tanggal-mulai');
                const tanggal_selesai = this.getAttribute('data-tanggal-selesai');
                const waktu_pengingat = this.getAttribute('data-waktu-pengingat');

                const senin = this.getAttribute('data-senin');
                const selasa = this.getAttribute('data-selasa');
                const rabu = this.getAttribute('data-rabu');
                const kamis = this.getAttribute('data-kamis');
                const jumat = this.getAttribute('data-jumat');
                const sabtu = this.getAttribute('data-sabtu');
                const minggu = this.getAttribute('data-minggu');
                
                
                document.getElementById('edit-id-tugas').value = id_tugas;
                document.getElementById('edit-judul-tugas').value = judul_tugas;
                document.getElementById('edit-isi-tugas').value = isi_tugas;
                document.getElementById('edit-tanggal-mulai').value = tanggal_mulai;
                document.getElementById('edit-tanggal-selesai').value = tanggal_selesai;
                document.getElementById('edit-waktu-pengingat').value = waktu_pengingat;
                document.getElementById('edit-senin').value = senin;
                document.getElementById('edit-selasa').value = selasa;
                document.getElementById('edit-rabu').value = rabu;
                document.getElementById('edit-kamis').value = kamis;
                document.getElementById('edit-jumat').value = jumat;
                document.getElementById('edit-sabtu').value = sabtu;
                document.getElementById('edit-minggu').value = minggu;
                
            })
        });
    });

</script>

</body>

</html>