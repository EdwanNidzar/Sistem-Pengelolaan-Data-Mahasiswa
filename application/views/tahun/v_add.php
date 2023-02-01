<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">Tambah Data Semester</div>
        <div class="card-body">
            <form action="<?php echo base_url('tahun/action_add'); ?>" method="post">
                
                <div class="form-group">
                    <label for="nama" >tahun</label>
                    <input type="number" name="tahun" id="tahun" min="0000" max="9999" class="form-control" placeholder="Isi Tahun Angkatan" required>
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