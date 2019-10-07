<?php  

interface infoProduk{
	 public function getSemua();
}

Abstract class produk {
	protected $judul  , 
			$penulis ,
			$penerbit,
			$diskon = 0 ,
			$harga; 

	public function __construct($judul= "judul",$penulis="penulis",$penerbit= "penerbit", $harga= 0){
		$this->judul= $judul;
		$this->penulis= $penulis;
		$this->penerbit= $penerbit;
		$this->harga= $harga;
		
		
	}
	public function getJudul(){
		return $this->judul;
	}
	public function setJudul($judul){
		
		$this->judul=$judul;
	}
	public function getPenulis(){
		return $this->$penulis;
	}
	public function setPenulis($penulis){
		
		$this->penulis=$penulis;
	}
	public function getPenerbit(){
		return $this->penerbit;
	}
	public function setPenerbit($penerbit){
		
		$this->penerbit=$penerbit;
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	
	Abstract public function getInfo();
	public function getDiskon(){
		return $this->diskon;
	}
	public function setDiskon($diskon){
		$this->diskon=$diskon;
	}
	public function getHarga(){
		return $this->harga-($this->harga*$this->diskon/100);
	}
	public function setHarga($harga){
		
		$this->harga=$harga;
	}
}

/**
* 
*/
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


class cetakInfoProduk{
	public $daftarProduk =[];
	public function tambahProduk (produk $produk){
		$this->daftarProduk[]=$produk;
	}
	public function cetak (){
		$str ="DAFTAR PRODUK : <br>";
		foreach ($this->daftarProduk as $p) {
			$str.= "-{$p->getSemua()} <br>";
		}
		return $str;
	}
}


$produk1= new komik("Shingeki no kyojin","gak tau","WIT studio",30000,100);
$produk2= new game("PUBG Mobile","Bluehole","Tencent Games",200000,50);

$catakProduk =new cetakInfoProduk();
$catakProduk ->tambahProduk($produk1);
$catakProduk ->tambahProduk($produk2);
echo $catakProduk->cetak();










?>