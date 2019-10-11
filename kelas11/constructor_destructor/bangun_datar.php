<?php
class Lingkaran{
    public $jari_jari;
    public function __construct($jari_jari){
        $this->jari_jari=$jari_jari;
    }
    public function menghitungLuas(){
        return "Luas Lingkaran : ".(3.14*$this->jari_jari*$this->jari_jari);
    }
    public function menghitungKeliling(){
        return "Keliling Lingkaran : ".(2*3.14*$this->jari_jari);
    }
}
$lingkaran1 = new Lingkaran(10);
echo "Jari Jari Lingkaran : ".$lingkaran1->jari_jari."<br>";
echo $lingkaran1->menghitungLuas();
echo "<br>";
echo $lingkaran1->menghitungKeliling();
?>