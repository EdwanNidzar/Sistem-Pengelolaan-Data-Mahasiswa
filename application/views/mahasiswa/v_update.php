<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">Ubah Data Mahasiswa</div>
        <div class="card-body">
            <form action="<?php echo base_url('mahasiswa/action_update'); ?>" method="post">
                <?php $data = $result->row(); ?>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="text" class="form-control" name="nim" value="<?= $data->nim ?>" readonly>
                </div>

                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="nama" value="<?= $data->nama_mahasiswa ?>">
                </div>

                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option value="L" <?php if ($data->jk == 'L') echo 'selected'; ?>>Laki laki</option>
                        <option value="P" <?php if ($data->jk == 'P') echo 'selected'; ?>>Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="prodi">PRODI</label>
                    <select name="prodi" class="form-control">
                    <option value="" disabled selected>--Pilih Prodi--</option>
                        <?php foreach ($prodi->result_array() as $p) : ?>
                            <option value="<?= $p['id_prodi'] ?>" <?php if ($p['id_prodi'] == $data->id_prodi) echo 'selected' ?> ><?= $p['nama_prodi'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="semester">SEMESTER</label>
                    <select name="semester" class="form-control">
                    <option value="" disabled selected>--Pilih Semester--</option>
                        <?php foreach ($semester->result_array() as $s) : ?>
                            <option value="<?= $s['id_semester'] ?>" <?php if ($s['id_semester'] == $data->id_semester) echo 'selected' ?> ><?= $s['semester'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kelas">KELAS</label>
                    <select name="kelas" class="form-control">
                    <option value="" disabled selected>--Pilih Kelas--</option>
                        <?php foreach ($kelas->result_array() as $k) : ?>
                            <option value="<?= $k['id_kelas'] ?>" <?php if ($k['id_kelas'] == $data->id_kelas) echo 'selected' ?> ><?= $k['kelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="tahun">TAHUN ANGKATAN</label>
                    <select name="tahun" class="form-control">
                    <option value="" disabled selected>--Pilih Tahun Angkatan--</option>
                        <?php foreach ($tahun_angkatan->result_array() as $t) : ?>
                            <option value="<?= $t['id_tahun'] ?>" <?php if ($t['id_tahun'] == $data->id_tahun) echo 'selected' ?> ><?= $t['tahun_angkatan'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <br>
                <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
</body>

</html>