<?php  

class produk{
	public $judul = "judul" , 
			$penulis = 'Penulis',
			$penerbit = 'penerbit',
			$harga = 0; 

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

$produk1= new produk();
$produk1 -> judul="Shingeki no kyojin";
$produk1 -> penerbit="WIT studio";
// var_dump($produk1);

// $produk2= new produk();
// var_dump($produk2);

// $produk3= new produk();
// $produk3 ->episode = 12; 
// var_dump($produk3);

echo "komik : ".$produk1-> getLabel();
