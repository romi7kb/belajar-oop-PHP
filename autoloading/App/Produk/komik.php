<?php  
class komik extends produk implements infoProduk
{
	public $jmlhalaman;
	public function __construct($judul= "judul",$penulis="penulis",$penerbit= "penerbit", $harga= 0, $jmlhalaman=0){

		parent::__construct($judul,$penulis,$penerbit, $harga);

		$this->jmlhalaman= $jmlhalaman;
		
		
	}
	public function getInfo(){
		$str ="{$this->judul} | {$this->getLabel()} (RP.{$this->harga})";
	
		return $str;
	}
	public function getSemua(){
		$str ="KOmik : ".$this->getInfo()." ~ {$this->jmlhalaman} Jam.";
		return $str;
	}
	
	
}
?>