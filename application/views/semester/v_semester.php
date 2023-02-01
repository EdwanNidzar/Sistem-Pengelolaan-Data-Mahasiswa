<?php $nama = $this->session->userdata('nama') ?>
<div class="container">
    <h1>Selamat Datang <?= $nama; ?></h1>

    <?php if ($this->session->userdata('role') == 'admin') { ?>
        <a href="<?= base_url('semester/add') ?>" class="btn btn-primary btn-sm">ADD</a>
    <?php } ?>

    <br><br>
    <table class="table" id="example">
        <thead class="thead-light">
            <tr>
                <th>ID SEMESTER</th>
                <th>SEMESTER</th>
                <th>Jumlah Mahasiswa</th>
                <th>AKSI</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($semester->result_array() as $s) : ?>
                <tr>
                    <td><?= $s['id_semester']; ?></td>
                    <td><?= $s['semester']; ?></td>
                    <td><?= $s['jumlah']; ?></td>
                    <td>
                    <?php if ($this->session->userdata('role') == 'admin') { ?>
                        <a href="<?= base_url('semester/update/') ?><?= $s['id_semester']; ?>" class="btn btn-warning btn-sm">UPDATE</a>
                        <a href="<?= base_url('semester/delete/') ?><?= $s['id_semester']; ?>" class="btn tgn btn-danger btn-sm">DELETE</a>
                    <?php } ?>  
                        <a href="<?= base_url('semester/detail/') ?><?= $s['id_semester']; ?>" class="btn tgn btn-info btn-sm">DETAIL Mahasiswa</a>                     
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>