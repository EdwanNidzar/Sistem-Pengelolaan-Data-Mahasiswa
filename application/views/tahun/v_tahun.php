<?php $nama = $this->session->userdata('nama') ?>
<div class="container">
    <h1>Selamat Datang <?= $nama; ?></h1>

    <?php if ($this->session->userdata('role') == 'admin') { ?>
        <a href="<?= base_url('tahun/add') ?>" class="btn btn-primary btn-sm">ADD</a>
    <?php } ?>
    
    <br><br>
    <table class="table" id="example">
        <thead class="thead-light">
            <tr>
                <th>ID TAHUN</th>
                <th>TAHUN ANGKATAN</th>
                <th>Jumlah Mahasiswa</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($tahun->result_array() as $t) : ?>
                <tr>
                    <td><?= $t['id_tahun']; ?></td>
                    <td><?= $t['tahun_angkatan']; ?></td>
                    <td><?= $t['jumlah']; ?></td>
                    <td>
                    <?php if ($this->session->userdata('role') == 'admin') { ?>
                        <a href="<?= base_url('tahun/update/') ?><?= $t['id_tahun']; ?>" class="btn btn-warning btn-sm">UPDATE</a>
                        <a href="<?= base_url('tahun/delete/') ?><?= $t['id_tahun']; ?>" class="btn tgn btn-danger btn-sm">DELETE</a>
                    <?php } ?>
                        <a href="<?= base_url('tahun/detail/') ?><?= $t['id_tahun']; ?>" class="btn tgn btn-info btn-sm">DETAIL Mahasiswa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>