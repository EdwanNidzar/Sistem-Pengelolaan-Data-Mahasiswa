<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">Tambah Data Prodi</div>
        <div class="card-body">
            <form action="<?php echo base_url('prodi/action_add'); ?>" method="post">
                
                <div class="form-group">
                    <label for="nama">Nama Prodi</label>
                    <input type="text" class="form-control" name="nama">
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