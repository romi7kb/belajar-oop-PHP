<?php  

class produk{
	public $judul  , 
			$penulis ,
			$penerbit ,
			$harga,
			$jmlhalaman,
			$waktumain,
			$gendre; 

	public function __construct($judul= "judul",$penulis="penulis",$penerbit= "penerbit", $harga= 0, $jmlhalaman=0, $waktumain=0, $gendre){
		$this->judul= $judul;
		$this->penulis= $penulis;
		$this->penerbit= $penerbit;
		$this->harga= $harga;
		$this->jmlhalaman= $jmlhalaman;
		$this->waktumain= $waktumain;
		$this->gendre= $gendre;
		
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	public function getSemua(){
		$str ="{$this->gendre} : {$this->judul} | {$this->getLabel()} (RP.{$this->harga})";
		if ($this->gendre=="komik") {
			$str .= "- {$this->jmlhalaman} Halaman.";
		}else{
			$str .= "- {$this->waktumain} Jam.";
		}
		return $str;
	}
}

class cetakInfoProduk{
	public function cetak ( produk $produk){
		$str ="{$produk->judul} | {$produk->getLabel()} (RP. {$produk->harga})";
		return $str;
	}
}




$produk1= new produk("Shingeki no kyojin","gak tau","WIT studio",30000,100,0,"komik");
$produk2= new produk("PUBG Mobile","Bluehole","Tencent Games",199999,0,50, "game");
echo $produk1 ->getSemua();
echo "<br>";
echo $produk2 ->getSemua();


