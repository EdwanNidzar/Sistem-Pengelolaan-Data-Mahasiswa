<?php $nama = $this->session->userdata('nama') ?>
<div class="container">
    <h1>Selamat Datang <?= $nama; ?></h1>
    <?php
    // Cek role user
    if ($this->session->userdata('role') == 'admin') { // Jika role-nya admin
    ?>
        <a href="<?= base_url('kelas/add') ?>" class="btn btn-primary btn-sm">ADD</a>
    <?php
        }
    ?>
    

    <br><br>
    <table class="table" id="example">
        <thead class="thead-light">
            <tr>
                <th>ID KELAS</th>
                <th>KELAS</th>
                <th>Jumlah Mahasiswa</th>
                <th>AKSI</th>
                
            </tr>
        </thead>

        <tbody>
            <?php foreach ($kelas->result_array() as $k) : ?>
                <tr>
                    <td><?= $k['id_kelas']; ?></td>
                    <td><?= $k['kelas']; ?></td>
                    <td><?= $k['jumlah']; ?></td>
                    <td>
                        <?php if ($this->session->userdata('role') == 'admin') { ?>
                            <a href="<?= base_url('kelas/update/') ?><?= $k['id_kelas']; ?>" class="btn btn-warning btn-sm">UPDATE</a>
                            <a href="<?= base_url('kelas/delete/') ?><?= $k['id_kelas']; ?>" class="btn tgn btn-danger btn-sm">DELETE</a> 
                        <?php } ?>   
                        <a href="<?= base_url('kelas/detail/') ?><?= $k['id_kelas']; ?>" class="btn tgn btn-info btn-sm">DETAIL Mahasiswa</a>             
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>