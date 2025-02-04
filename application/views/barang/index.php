<!-- bagian content -->
<div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
            <h1>Data Tabel Barang</h1>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <?php if($this->session->flashdata()) : ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">Barang 
                <strong>Berhasil</strong><?= $this->session->flashdata('flash'); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
        <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Add Barang</a>
        <br>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Kategori</th>
                    <th>Nama Ruangan</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Kondisi</th>
                    <th>Proses</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($barang as $barang) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td><?= $barang['kode_brg']; ?></td>
                        <td><?= $barang['nama_kat']; ?></td>
                        <td><?= $barang['nama_ruang']; ?></td>
                        <td><?= $barang['nama_brg']; ?></td>
                        <td><?= $barang['jumlah']; ?></td>
                        <td><?= $barang['kondisi']; ?></td>
                        <td>
                            <a href="<?= base_url(); ?>barang/edit/<?= $barang['kode_brg']; ?>" class="btn btn-success">Edit</a>
                            <a href="<?= base_url(); ?>barang/hapus/<?= $barang['kode_brg']; ?>" class="btn btn-danger" onclick="return confirm('yakin ingin dihapus?')">Hapus</a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
            </tbody>
        </table>
        </div>
    </div>
 </div>