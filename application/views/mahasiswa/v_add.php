<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">Tambah Data Mahasiswa</div>
        <div class="card-body">
            <form action="<?php echo base_url('mahasiswa/action_add'); ?>" method="post">
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" name="nim" placeholder="Inputkan NIM Mahasiswa" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Siswa</label>
                    <input type="text" class="form-control" name="nama" placeholder="Inputkan Nama Mahasiswa" required>
                </div>

                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                        <option value="L">Laki laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="prodi">PRODI</label>
                    <select name="prodi" class="form-control">
                    <option value="" disabled selected>--Pilih Prodi--</option>
                        <?php foreach ($prodi->result_array() as $p) : ?>
                            <option value="<?= $p['id_prodi'] ?>"><?= $p['nama_prodi'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="semester">SEMESTER</label>
                    <select name="semester" class="form-control">
                    <option value="" disabled selected>--Pilih Semester--</option>
                        <?php foreach ($semester->result_array() as $s) : ?>
                            <option value="<?= $s['id_semester'] ?>"><?= $s['semester'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kelas">KELAS</label>
                    <select name="kelas" class="form-control">
                    <option value="" disabled selected>--Pilih Kelas--</option>
                        <?php foreach ($kelas->result_array() as $k) : ?>
                            <option value="<?= $k['id_kelas'] ?>"><?= $k['kelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tahun">TAHUN ANGKATAN</label>
                    <select name="tahun" class="form-control">
                    <option value="" disabled selected>--Pilih Tahun Angkatan--</option>
                        <?php foreach ($tahun_angkatan->result_array() as $t) : ?>
                            <option value="<?= $t['id_tahun'] ?>"><?= $t['tahun_angkatan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <br>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Batal" class="btn btn-secondary">
            </form>
        </div>
    </div>
</div>
</body>

</html>