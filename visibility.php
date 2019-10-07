<?php  

class produk{
	public $judul  , 
			$penulis ,
			$penerbit;

	private $diskon = 0 ;
	private $harga; 

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
	public function setDiskon($diskon){
		$this->diskon=$diskon;
	}
	public function getHarga(){
		return $this->harga-($this->harga*$this->diskon/100);
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
$produk2= new game("PUBG Mobile","Bluehole","Tencent Games",200000,50);
echo $produk1 ->getSemua();
echo "<br>";
echo $produk2 ->getSemua();
echo "<hr>";
$produk2 ->setDiskon(50);
echo $produk2 ->getHarga();;


