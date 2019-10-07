<?php  
class game extends produk implements infoProduk {
	public $waktumain;
	public function __construct($judul= "judul",$penulis="penulis",$penerbit= "penerbit", $harga= 0,$waktumain=0){

		parent::__construct($judul,$penulis,$penerbit, $harga);

		$this->waktumain= $waktumain;
		
	}

	public function getInfo(){
		$str ="{$this->judul} | {$this->getLabel()} (RP.{$this->harga})";
	
		return $str;
	}

	public function getSemua(){
		$str ="Game : ".$this->getInfo()." ~ {$this->waktumain} Jam.";
		return $str;
	}
	
}
?>