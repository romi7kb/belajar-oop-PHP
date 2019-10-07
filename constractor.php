<?php  

class produk{
	public $judul  , 
			$penulis ,
			$penerbit ,
			$harga ; 

	public function __construct($judul= "judul",$penulis="penulis",$penerbit= 'penerbit', $harga= 0){
		$this->judul= $judul;
		$this->penulis= $penulis;
		$this->penerbit= $penerbit;
		$this->harga= $harga;

	}

	public function getLabel(){
		return "$this->judul,$this->penulis, $this->penerbit";
	}
}

$produk1= new produk("Shingeki no kyojin","gak tau","WIT studio",100000);
echo $produk1-> getLabel();

