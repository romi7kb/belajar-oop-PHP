<?php
include 'database.php';
$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $kategori_produk = $_POST['kategori_produk'];
    $jumlah_produk = $_POST['jumlah_produk'];
    $harga_produk = $_POST['harga_produk'];    
    $deskripsi = $_POST['deskripsi'];
    $sub_total = $harga_produk*$jumlah_produk;
    
}
if ($aksi == "tambah") {
    $cart->create($nama_produk, $kategori_produk, $jumlah_produk,$harga_produk,$deskripsi,$sub_total);
    header("location:data.php");
} elseif ($aksi == "update") {
    $cart->update($id,$nama_produk, $kategori_produk, $jumlah_produk,$harga_produk,$deskripsi,$sub_total);
    header("location:data.php");
} elseif ($aksi == "delete") {
    $id = $_GET['id'];
    $cart->delete($id);
    header("location:data.php");
}