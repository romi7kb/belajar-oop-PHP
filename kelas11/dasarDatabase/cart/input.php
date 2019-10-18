<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Input</title>
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
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="index.php">Romi Ramdhani</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item ">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="input.php">Input Produk<span class="sr-only">(current)</span></a>
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
  <form action="proses.php?aksi=tambah" method="post">
    <h1>Tambah Ke keranjang</h1>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nama Produk</label>
    <input type="text" class="form-control" name="nama_produk" id="exampleFormControlInput1" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Kategori Produk</label>
    <select class="form-control" name="kategori_produk" id="exampleFormControlSelect1">
      <option>Makanan</option>
      <option>Minuman</option>
      <option>Elektonik</option>
      <option>Baju</option>
      <option>Celana</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Jumlah Produk</label>
    <input type="number" class="form-control" name="jumlah_produk" id="exampleFormControlInput2" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Harga Produk</label>
    <input type="number" class="form-control" name="harga_produk" id="exampleFormControlInput2" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Deskripsi</label>
    <textarea class="form-control" name="deskripsi" id="exampleFormControlTextarea1" rows="3" required></textarea>
  </div>
  <button class="btn btn-primary mb-3" name="save" type="submit">Tambah</button>
  </form>
</div>
    <!-- js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>