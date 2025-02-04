<nav class="navbar navbar-expand-lg  bg-primary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url(); ?>">InventarisAPP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>kategori">Data Kategori</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>ruangan">Data Ruangan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>barang">Data Barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>laporan">Data Laporan</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>