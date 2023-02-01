<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">Tambah Data Semester</div>
        <div class="card-body">
            <form action="<?php echo base_url('semester/action_add'); ?>" method="post">
                
                <div class="form-group">
                    <label for="nama" >Semester</label>
                    <input type="number" name="semester" id="semester" min="1" max="15" class="form-control" placeholder="Isi Semester (1 - 15)" required>
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