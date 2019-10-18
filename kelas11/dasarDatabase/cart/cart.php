<?php
    include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Read</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  </head>
  <body class="bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">Romi Ramdhani</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="input.php">Input Produk</a>
          </li>
        </ul>
        <a href="data.php" class="btn btn-primary">
          <img src="assets/img/cart.png" alt=""  style="width:32px;height:32px;"> <span class="badge badge-light"><?=$cart->jumlah();?></span>
          <span class="sr-only">unread messages</span>
        </a>
      </div>
    </nav>
    <!-- isi -->
    <div class="container mt-5 mb-5 bg-light" style="Margin-top: 50px;">
    <h1>Tampil</h1>
    <?php
              foreach ($cart->show($_GET['id']) as $data ) {
          ?>
        <input type="hidden" name="id" value="<?=$data['id']?>">
        <div class="form-group">
    <label for="exampleFormControlInput1">Nama Produk</label>
    <input type="text" class="form-control" name="nama_produk" value="<?=$data['nama_produk']?>" readonly id="exampleFormControlInput1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori Produk</label>
    <select class="form-control" name="kategori_produk" id="exampleFormControlSelect1" disabled>
      <option 
      <?php
      if ($data['kategori_produk']=="Makanan") {
        echo selected;
      }
      ?>>Makanan</option>
      <option
      <?php
      if ($data['kategori_produk']=="Minuman") {
        echo selected;
      }
      ?>>Minuman</option>
      <option
      <?php
      if ($data['kategori_produk']=="Elektonik") {
        echo selected;
      }
      ?>>Elektonik</option>
      <option
      <?php
      if ($data['kategori_produk']=="Baju") {
        echo selected;
      }
      ?>>Baju</option>
      <option
      <?php
      if ($data['kategori_produk']=="Celana") {
        echo selected;
      }
      ?>>Celana</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Jumlah Produk</label>
    <input type="number" class="form-control" name="jumlah_produk" value="<?=$data['jumlah_produk']?>" readonly id="exampleFormControlInput2" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Harga Produk</label>
    <input type="number" class="form-control" name="harga_produk" value="<?=$data['harga_produk']?>" readonly id="exampleFormControlInput2" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi</label>
    <textarea class="form-control" name="deskripsi" readonly id="exampleFormControlTextarea1" rows="3" required><?=$data['deskripsi']?></textarea>
  </div>
        <?php }?>
          <a class="btn btn-primary mb-3" href="data.php"  role="button">Kembali</a>
    </div>
    <!-- js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>