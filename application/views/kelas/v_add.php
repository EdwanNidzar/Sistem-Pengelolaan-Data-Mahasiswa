<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">Tambah Data Kelas</div>
        <div class="card-body">
            <form action="<?php echo base_url('kelas/action_add'); ?>" method="post">
                
                <div class="form-group">
                    <label for="nama" >Kelas</label>
                    <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Isi Kelas" required>
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