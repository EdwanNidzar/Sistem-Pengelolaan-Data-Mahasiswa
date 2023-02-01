<div class="container">
    <div class="card">
        <div class="card-header bg-primary text-white">Ubah Data semester</div>
        <div class="card-body">
            <form action="<?php echo base_url('semester/action_update'); ?>" method="post">
            <?php $data = $result->row(); ?>
                <div class="form-group">
                    <input type="hidden" class="form-control" name="id" value="<?= $data->id_semester ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Semester</label>
                    <input type="text" class="form-control" name="semester" value="<?= $data->semester ?>">
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