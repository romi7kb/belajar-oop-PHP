<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>crud</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css" />
    
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
          <li class="nav-item ">
            <a class="nav-link" href="input.php">Input Produk</a>
          </li>
        </ul>
        <a href="data.php" class="btn btn-primary" >
          <img src="assets/img/cart.png" alt=""  style="width:32px;height:32px;"> <span class="badge badge-light"><?=$cart->jumlah();?></span>
          <span class="sr-only">unread messages</span>
        </a>
      </div>
    </nav>
    <!-- isi -->
<div class="container mt-5 mb-5 pt-5 pb-5 bg-light" style="Margin-top: 50px;">
<h2>Keranjang Balanja</h2>
    <table class="table mt-3 mb-3" id="pagi">
    <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Kategori Produk</th>
      <th scope="col">Jumlah Produk</th>
      <th scope="col">Harga Produk</th>
      <th scope="col">Deskripsi</th>
      <th scope="col">Sub Total</th>
      <th scope="col">Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $no=1;
    foreach ($cart->index() as $data ) {
    ?>
    <tr>
      <th scope="row"><?=$no++?></th>
      <td><?=$data['nama_produk']?></td>
      <td><?=$data['kategori_produk']?></td>
      <td><?=$data['jumlah_produk']?></td>
      <td><?=$data['harga_produk']?></td>
      <td><?=$data['deskripsi']?></td>
      <td><?=$data['sub_total']?></td>
      <td><a class="btn btn-primary btn-sm mr-1" href="cart.php?id=<?=$data['id']?>"  role="button">lihat</a>
      <a class="btn btn-warning btn-sm mr-1" href="edit.php?id=<?=$data['id']?>"  role="button">edit</a>
      <a class="btn btn-danger btn-sm" href="proses.php?id=<?=$data['id']?>&aksi=delete" onclick="return confirm('are u sure senpai :3?');" role="button">hapus</a></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
    <?php
      $total = $cart->total();
    ?>
    <table class="table ">
     <thead  class="thead-dark">
      <tr>
        <th scope="col">Total Pembayaran</th>
        <th scope="col"><?= $total?></th>
      </tr>
     </thead>
    </table>
</div>
    <!-- js -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script>$(document).ready(function() {
      $('#pagi').DataTable();
    } );</script>    
  </body>
</html>