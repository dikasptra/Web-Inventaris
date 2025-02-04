<div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
            <h1>Formulir Edit Data</h1>
            <hr>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
        <form method="post" id="form_advanced_validation">
            <div class="mb-3">
                <label for="kode" class="form-label">Kode Ruangan</label>
            <input type="text" class="form-control" id="kode" name="kode_ruang" autocomplete="off" required value="<?= $ruangan['kode_ruang']; ?>">
            <small class="form-text text-danger"><?= form_error('kode_ruang'); ?></small>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Ruangan</label>
            <input type="text" class="form-control" id="nama" name="nama_ruang" autocomplete="off" required value="<?= $ruangan['nama_ruang']; ?>">
            <small class="form-text text-danger"><?= form_error('nama_ruang'); ?></small>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
            <hr>
        </div>
    </div>
</div>