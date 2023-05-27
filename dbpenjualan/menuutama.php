<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Form Transaksional</title>
  <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
  <script src="bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="https://jarvis.stmi.ac.id/assets/img/logo/a186bb9e-2438-4b0a-a919-bcd163831c89.png"
        target="_blank">
        <img src="../dbpenjualan/img/logo-stmi.png" alt="Logo" width="50" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#tablemaster">Table Master</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#tabletransaksional">Table Transaksional</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <section id="hero" class="bg-primary text-white text-center py-5">
    <div class="container">
      <h1>Manajemen Basis Data</h1>
      <p>Membuat Form Transaksional dengan PHP</p>
    </div>
  </section>

  <section id="tablemaster" class="py-5">
    <div class="container">
      <h2 class="text-center">Table Master</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5><a href="../dbpenjualan/supplier/supplier.php">Tabel Supplier</a></h5>
              <p class="card-text">Tabel supplier ini merupakan tabel untuk menambah supplier, mengelola supplier, dan
                menghapus supplier</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5><a href="../dbpenjualan/pelanggan/pelanggan.php">Tabel Pelanggan</a></h5>
              <p class="card-text">Tabel pelanggan ini merupakan tabel untuk menambah pelanggan, mengelola pelanggan,
                dan
                menghapus pelanggan</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5><a href="../dbpenjualan/barang/barang.php">Tabel Supplier</a></h5>
              <p class="card-text">Tabel barang ini merupakan tabel untuk menambah barang, mengelola barang, dan
                menghapus barang</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="tabletransaksional" class="bg-light py-5">
    <div class="container">
      <h2 class="text-center">Table Transaksional</h2>
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5class="card-title">Paket 1</h5class=>
                <h6 class="card-subtitle mb-2 text-muted">Rp 99.000/bulan</h6>
                <p class="card-text">Deskripsi paket 1</p>
                <a href="#" class="btn btn-primary">Pilih Paket</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Paket 2</h5>
              <h6 class="card-subtitle mb-2 text-muted">Rp 199.000/bulan</h6>
              <p class="card-text">Deskripsi paket 2</p>
              <a href="#" class="btn btn-primary">Pilih Paket</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Paket 3</h5>
              <h6 class="card-subtitle mb-2 text-muted">Rp 299.000/bulan</h6>
              <p class="card-text">Deskripsi paket 3</p>
              <a href="#" class="btn btn-primary">Pilih Paket</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="bg-dark text-white text-center py-3">
      <p>Hak Cipta © 2023. Nama Perusahaan. All rights reserved.</p>
    </footer>
</body>

</html>