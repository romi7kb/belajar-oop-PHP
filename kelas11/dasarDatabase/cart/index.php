<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Home</title>
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
      <a class="navbar-brand" href="#">Romi Ramdhani</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
        <h1>Welcome to my program!</h1>   
    </div>
    <!-- js -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>