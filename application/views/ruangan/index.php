<!-- bagian content -->
 <div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
            <h1>Data Tabel Ruangan</h1>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <?php if($this->session->flashdata()) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">Ruangan
                <strong>Berhasil</strong><?= $this->session->flashdata('flash'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
        <a href="<?= base_url(); ?>ruangan/tambah" class="btn btn-primary">Add Ruangan</a>
        <br>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Ruangan</th>
                    <th>Nama Ruangan</th>
                    <th>Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($ruangan as $ruangan) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $ruangan['kode_ruang']; ?></td>
                        <td><?= $ruangan['nama_ruang']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>ruangan/edit/<?= $ruangan['kode_ruang']; ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url(); ?>ruangan/hapus/<?= $ruangan['kode_ruang']; ?>" class="btn btn-danger" onclick="return confirm('yakin ingin dihapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
 </div>