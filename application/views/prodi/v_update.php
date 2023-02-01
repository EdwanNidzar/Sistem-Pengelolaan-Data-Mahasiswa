<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">Ubah Data Prodi</div>
        <div class="card-body">
            <form action="<?php echo base_url('prodi/action_update'); ?>" method="post">
            <?php $data = $result->row(); ?>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="<?= $data->id_prodi ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Prodi</label>
                    <input type="text" class="form-control" name="nama" value="<?= $data->nama_prodi ?>">
                </div>
                
                <br>
                <input type="submit" name="simpan" value="Ubah" class="btn btn-primary">
                <input type="reset" value="Batal" class="btn btn-secondary">
            </form>
        </div>
    </div>
</div>
</body>

</html>