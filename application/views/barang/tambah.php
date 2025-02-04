<div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
            <h1>Formulir tambah data barang</h1>
            <hr>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12">
            <form action="" method="post" id="form_advanced_validation">
                <div class="mb-3">
                    <label for="kode_brg" class="form-label">Kode Barang</label>
                    <input type="text" class="form-control" id="kode_brg" name="kode_brg" required>
                    <small class="form-text text-danger"><?= form_error('kode_brg'); ?></small>
                </div>

                <div class="mb-3">
                    <label for="kode_kat" class="form-label">Kode Kategori</label>
                    <select name="kode_kat" id="kode_kat" class="form-control show-tick ms select2" data-placeholder="Select">
                        <option value=""><--Pilih--></option>
                        <?php foreach ($kategori as $kategori) : ?>
                            <option value="<?= $kategori['kode_kat']; ?>">
                                <?= $kategori['kode_kat']; ?> | <?= $kategori['nama_kat']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="kode_ruang" class="form-label">Kode Ruangan</label>
                    <select name="kode_ruang" id="kode_ruang" class="form-control show-tick ms select2" data-placeholder="Select">
                        <option value=""><--Pilih--></option>
                        <?php foreach ($ruangan as $ruangan) : ?>
                            <option value="<?= $ruangan['kode_ruang']; ?>">
                                <?= $ruangan['kode_ruang']; ?> | <?= $ruangan['nama_ruang']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nama_brg" class="form-label">Nama Barang</label>
                    <input type="text" class="form-control" id="nama_brg" name="nama_brg" required>
                    <small class="form-text text-danger"><?= form_error('nama_brg'); ?></small>
                </div>

                <div class="mb-3">
                    <label for="jumlah" class="form-label">Jumlah Barang</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" required>
                    <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
                </div>

                <div class="mb-3">
                    <label for="kondisi" class="form-label">Kondisi Barang</label>
                    <input type="text" class="form-control" id="kondisi" name="kondisi" required>
                    <small class="form-text text-danger"><?= form_error('kondisi'); ?></small>
                </div>

                <button type="submit" class="btn btn-success">Save</button>
            </form>
        </div>
    </div>
    <!-- end div container -->
    <!-- jangan dihapus -->
</div>