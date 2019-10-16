<?php
class Aritmatika
{
    public $bil1,
            $bil2;
    public function __construct($bil1,$bil2){
        $this->bil1=$bil1;
        $this->bil2=$bil2;
    }
    public function Tambah()
    {
        $tambah = $this->bil1+$this->bil2;
        return "Hasil Pertambahan : $tambah";
    }
    public function Kurang()
    {
        $kurang = $this->bil1-$this->bil2;
        return "Hasil Pengurangan $this->bil1 - $this->bil2 : $kurang";
    }
    public function Kali()
    {
        $kali = $this->bil1*$this->bil2;
        return "Hasil Perkalian : $kali";
    }
    public function Bagi()
    {
        $bagi = $this->bil1/$this->bil2;
        return "Hasil Pembagian : $bagi";
    }
}
if (isset($_POST['kirim'])) {
    $bil1=$_POST['bil1'];
    $bil2=$_POST['bil2'];
    $hasil = new Aritmatika($bil1,$bil2);
    echo"<p>Hasil Perhitungan $hasil->bil1 dan $hasil->bil2</p>";
    echo $hasil->Tambah()."<br>";
    echo $hasil->Kurang()."<br>";
    echo $hasil->Kali()."<br>";
    echo $hasil->Bagi()."<br>";
}

?>