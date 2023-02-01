<?php $nama = $this->session->userdata('nama') ?>
<div class="container">
    <h1>Selamat Datang <?= $nama; ?></h1>
    <?php
    // Cek role user
    if ($this->session->userdata('role') == 'admin') { // Jika role-nya admin
    ?>
        <a href="<?= base_url('mahasiswa/add') ?>" class="btn btn-primary btn-sm">ADD</a>
    <?php
    }
    ?>
    

    <br><br>
    <table class="table" id="example">
        <thead class="thead-light">
            <tr>
                <th>NIM</th>
                <th>NAMA MAHASISWA</th>
                <th>JENIS KELAMIN</th>
                <th>PRODI</th>
                <th>SEMESTER</th>
                <th>KELAS</th>
                <th>TAHUN ANGKATAN</th>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <th>AKSI</th>
                <?php endif; ?>
                
            </tr>
        </thead>

        <tbody>
            <?php foreach ($mahasiswa->result_array() as $s) : ?>
                <?php if ($s['jk'] == 'L') {
                    $jk = "Laki - laki";
                } else {
                    $jk = "Perempuan";
                }
                ?>
                <tr>
                    <td><?= $s['nim']; ?></td>
                    <td><?= $s['nama_mahasiswa']; ?></td>
                    <td><?= $jk; ?></td>
                    <td><?=$s['nama_prodi']; ?></td>
                    <td><?=$s['semester']; ?></td>
                    <td><?=$s['kelas']; ?></td>
                    <td><?=$s['tahun_angkatan']; ?></td>
                    <td>
                        <?php if ($this->session->userdata('role') == 'admin') : ?>
                            <a href="<?= base_url('mahasiswa/update/') ?><?= $s['nim']; ?>" class="btn btn-warning btn-sm">UPDATE</a>
                            <a href="<?= base_url('mahasiswa/delete/') ?><?= $s['nim']; ?>" class="btn tgn btn-danger btn-sm">DELETE</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>