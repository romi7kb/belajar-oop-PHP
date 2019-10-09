<?php
class Produk
{
    public $namaProduk;
    public $harga;
    public $jumlah;
    public function Beli(){
        return "Membeli Produk";
    }
}
$indomie = new Produk;
$indomie ->namaProduk = "Indomie Goreng";
$indomie ->harga = 2500;
$indomie ->jumlah = 3;
echo $indomie ->Beli()."<br>";
echo "Nama Produk : ".$indomie ->namaProduk."<br>";
echo "Harga : ".$indomie ->harga."<br>";
echo "Jumlah : ".$indomie ->jumlah."<br><br>";

$laptop = new Produk;
$laptop ->namaProduk = "Laptop Asus ROG";
$laptop ->harga = 25000000;
$laptop ->jumlah = 1;
echo $laptop ->Beli()."<br>";
echo "Nama Produk : ".$laptop ->namaProduk."<br>";
echo "Harga : ".$laptop ->harga."<br>";
echo "Jumlah : ".$laptop ->jumlah."<br>";
?>

