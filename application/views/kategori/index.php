<!-- bagian content -->
 <div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
            <h1>Data Tabel Kategori</h1>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-">
            <?php if($this->session->flashdata()) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">Kategori
                <strong>Berhasil</strong><?= $this->session->flashdata('flash'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
        <a href="<?= base_url(); ?>kategori/tambah" class="btn btn-primary">Add Kategori</a>
        <br>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Kategori</th>
                    <th>Nama Kategori</th>
                    <th>Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($kategori as $kategori) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $kategori['kode_kat']; ?></td>
                        <td><?= $kategori['nama_kat']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>kategori/edit/<?= $kategori['kode_kat']; ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url(); ?>kategori/hapus/<?= $kategori['kode_kat']; ?>" class="btn btn-danger" onclick="return confirm('yakin ingin dihapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
 </div>