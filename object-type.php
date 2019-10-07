<?php  

class produk{
	public $judul  , 
			$penulis ,
			$penerbit ,
			$harga ; 

	public function __construct($judul= "judul",$penulis="penulis",$penerbit= "penerbit", $harga= 0){
		$this->judul= $judul;
		$this->penulis= $penulis;
		$this->penerbit= $penerbit;
		$this->harga= $harga;

	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

class cetakInfoProduk{
	public function cetak (produk $produk){
		$str ="{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
		return $str;
	}
}




$produk1= new produk("Shingeki no kyojin","gak tau","WIT studio",30000);
$infoProduk =new cetakInfoProduk();
echo $infoProduk->cetak($produk1);

