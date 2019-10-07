<?php  

class produk{
	public $judul  , 
			$penulis ,
			$penerbit ,
			$harga; 

	public function __construct($judul= "judul",$penulis="penulis",$penerbit= "penerbit", $harga= 0){
		$this->judul= $judul;
		$this->penulis= $penulis;
		$this->penerbit= $penerbit;
		$this->harga= $harga;
		
		
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	public function getSemua(){
		$str ="{$this->judul} | {$this->getLabel()} (RP.{$this->harga})";
	
		return $str;
	}
}

/**
* 
*/
class komik extends produk
{
	public $jmlhalaman;
	public function __construct($judul= "judul",$penulis="penulis",$penerbit= "penerbit", $harga= 0, $jmlhalaman=0){

		parent::__construct($judul,$penulis,$penerbit, $harga);

		$this->jmlhalaman= $jmlhalaman;
		
		
	}
	public function getSemua(){
		$str ="Komik : ".parent::getSemua()." - {$this->jmlhalaman} Halaman.";
		return $str;
	}
	
}
class game extends produk
{
	public $waktumain;
	public function __construct($judul= "judul",$penulis="penulis",$penerbit= "penerbit", $harga= 0,$waktumain=0){

		parent::__construct($judul,$penulis,$penerbit, $harga);

		$this->waktumain= $waktumain;
		
	}
	public function getSemua(){
		$str ="Game : ".parent::getSemua()." ~ {$this->waktumain} Jam.";
		return $str;
	}
	
}


class cetakInfoProduk{
	public function cetak ( produk $produk){
		$str ="{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
		return $str;
	}
}




$produk1= new komik("Shingeki no kyojin","gak tau","WIT studio",30000,100);
$produk2= new game("PUBG Mobile","Bluehole","Tencent Games",199999,50);
echo $produk1 ->getSemua();
echo "<br>";
echo $produk2 ->getSemua();


