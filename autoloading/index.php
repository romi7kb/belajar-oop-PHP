<?php 

require_once 'App/init.php'; 

$produk1= new komik("Shingeki no kyojin","gak tau","WIT studio",30000,100);
$produk2= new game("PUBG Mobile","Bluehole","Tencent Games",200000,50);

$catakProduk =new cetakInfoProduk();
$catakProduk ->tambahProduk($produk1);
$catakProduk ->tambahProduk($produk2);
echo $catakProduk->cetak();
 new coba();