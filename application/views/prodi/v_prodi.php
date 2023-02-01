<?php $nama = $this->session->userdata('nama') ?>
<div class="container">
    <h1>Selamat Datang <?= $nama; ?></h1>

    <?php if ($this->session->userdata('role') == 'admin') { ?>
        <a href="<?= base_url('prodi/add') ?>" class="btn btn-primary btn-sm">ADD</a>
    <?php } ?>
    
    <br><br>
    <table class="table" id="example">
        <thead class="thead-light">
            <tr>
                <th>ID PRODI</th>
                <th>NAMA PRODI</th>
                <th>Jumlah Mahasiswa</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($prodi->result_array() as $p) : ?>
                <tr>
                    <td><?= $p['id_prodi']; ?></td>
                    <td><?= $p['nama_prodi']; ?></td>
                    <td><?= $p['jumlah']; ?></td>
                    <td>
                    <?php if ($this->session->userdata('role') == 'admin') { ?>
                        <a href="<?= base_url('prodi/update/') ?><?= $p['id_prodi']; ?>" class="btn btn-warning btn-sm">UPDATE</a>
                        <a href="<?= base_url('prodi/delete/') ?><?= $p['id_prodi']; ?>" class="btn tgn btn-danger btn-sm">DELETE</a>
                    <?php } ?>  
                        <a href="<?= base_url('prodi/detail/') ?><?= $p['id_prodi']; ?>" class="btn tgn btn-info btn-sm">DETAIL Mahasiswa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>