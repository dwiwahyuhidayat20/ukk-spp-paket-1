<div class="container-fluid">
    <div class="card mt-3 mb-3">
        <div class="card-body col-lg-6">
            <form method="post" action="<?= base_url('masterdata/add_jurusan') ?>">
                <div class="form-group">
                    <label for="jurusan">Kompetensi Keahlian</label>
                    <input type="text" class="form-control" id="jurusan" name="jurusan">
                    <?= form_error('jurusan', '<small class="text-danger ml-2">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
</div>