<?php  

class produk{
	public $judul  , 
			$penulis ,
			$penerbit ,
			$harga,
			$jmlhalaman,
			$waktumain; 

	public function __construct($judul= "judul",$penulis="penulis",$penerbit= "penerbit", $harga= 0, $jmlhalaman=0, $waktumain=0){
		$this->judul= $judul;
		$this->penulis= $penulis;
		$this->penerbit= $penerbit;
		$this->harga= $harga;
		$this->jmlhalaman= $jmlhalaman;
		$this->waktumain= $waktumain;
		
		
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
	public function getSemua(){
		$str ="Komik : ".parent::getSemua()." - {$this->jmlhalaman} Halaman.";
		return $str;
	}
	
}
class game extends produk
{
	public function getSemua(){
		$str ="Game : ".parent::getSemua()." - {$this->waktumain} Jam.";
		return $str;
	}
	
}


class cetakInfoProduk{
	public function cetak ( produk $produk){
		$str ="{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
		return $str;
	}
}




$produk1= new komik("Shingeki no kyojin","gak tau","WIT studio",30000,100,0);
$produk2= new game("PUBG Mobile","Bluehole","Tencent Games",199999,0,50);
echo $produk1 ->getSemua();
echo "<br>";
echo $produk2 ->getSemua();


