<!-- bagian content -->
<div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
            <h1>Data Laporan Inventaris Barang</h1>
            <hr>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <center>
                <img src="<?= base_url(); ?>assets/img/logo.png" alt="inventaris" height="100" width="100">
            </center>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Kode Barang</th>
                        <th>Kode Kategori</th>
                        <th>Nama Kategori</th>
                        <th>Kode Ruangan</th>
                        <th>Nama Ruangan</th>
                        <th>Nama Barang</th>
                        <th>Jumlah</th>
                        <th>Kondisi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cetak as $cetak) : ?>
                        <tr>
                            <td><?= $cetak['kode_brg']; ?></td>
                            <td><?= $cetak['kode_kat']; ?></td>
                            <td><?= $cetak['nama_kat']; ?></td>
                            <td><?= $cetak['kode_ruang']; ?></td>
                            <td><?= $cetak['nama_ruang']; ?></td>
                            <td><?= $cetak['nama_brg']; ?></td>
                            <td><?= $cetak['jumlah']; ?></td>
                            <td><?= $cetak['kondisi']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-12">
            <pre>
                Mengetahui,
                Kepala Inventaris Barang

                Supriyato, S.Kom
            </pre>
        </div>
    </div>
    <!-- end div container -->
 </div>