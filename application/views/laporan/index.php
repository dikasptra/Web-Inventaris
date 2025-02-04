<!-- bagian content -->
 <div class="container">
    <div class="row mt-2">
        <div class="col-md-12">
            <h1>Data Laporan Inventaris Barang</h1>
            <hr>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-12">
            <a href="<?= base_url(); ?>laporan/cetak" class="btn btn-primary" target="_blank">PRINT</a>
            <br>
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
                    <?php foreach ($laporan as $laporan) : ?>
                        <tr>
                            <td><?= $laporan['kode_brg']; ?></td>
                            <td><?= $laporan['kode_kat']; ?></td>
                            <td><?= $laporan['nama_kat']; ?></td>
                            <td><?= $laporan['kode_ruang']; ?></td>
                            <td><?= $laporan['nama_ruang']; ?></td>
                            <td><?= $laporan['nama_brg']; ?></td>
                            <td><?= $laporan['jumlah']; ?></td> 
                            <td><?= $laporan['kondisi']; ?></td>
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