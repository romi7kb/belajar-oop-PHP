<?php
class RPL2
{
    public $nama;
    public $jk;
    public $alamat;
    public $nilai_PAI;
    public $nilai_MTK;
    public $nilai_BIndo;
    public $nilai_BInggris;
    public function Cetak_biodata(){
        $biodata = "<h2>Biodata</h2>Nama : ".$this->nama."<br>Jenis Kelamin : ".$this->jk."<br>Alamat : ".$this->alamat."<br>";
        return $biodata;
    }
    public function nilai_rata_rata(){
        $rata = ($this->nilai_BIndo+$this->nilai_BInggris+$this->nilai_MTK+$this->nilai_PAI)/4;
        $Nilai_UN = "<b>Nilai UN</b><br>nilai PAI : ".$this->nilai_PAI."<br>Nilai MTK : ".$this->nilai_MTK."<br>Nilai B.Indonesia : ".$this->nilai_BIndo."<br>Nilai B.Inggris : ".$this->nilai_BInggris."<br>Rata Rata : ".$rata;
        return $Nilai_UN;
    }
}
$siswa1 = new RPL2;
$siswa1->nama="Alif";
$siswa1->jk="Laki-Laki";
$siswa1->alamat="Kopo";
$siswa1->nilai_PAI=70;
$siswa1->nilai_MTK=60;
$siswa1->nilai_BInggris=78;
$siswa1->nilai_BIndo=80;
echo $siswa1->Cetak_biodata();
echo $siswa1->nilai_rata_rata();

$siswa2 = new RPL2;
$siswa2->nama="Hilmy";
$siswa2->jk="Laki-Laki";
$siswa2->alamat="Kota BAru";
$siswa2->nilai_PAI=80;
$siswa2->nilai_MTK=70;
$siswa2->nilai_BInggris=78;
$siswa2->nilai_BIndo=80;
echo $siswa2->Cetak_biodata();
echo $siswa2->nilai_rata_rata();

$siswa3 = new RPL2;
$siswa3->nama="Rifqi";
$siswa3->jk="Laki-Laki";
$siswa3->alamat="Rancamanyar";
$siswa2->nilai_PAI=90;
$siswa2->nilai_MTK=50;
$siswa2->nilai_BInggris=80;
$siswa2->nilai_BIndo=70;
echo $siswa2->Cetak_biodata();
echo $siswa2->nilai_rata_rata();

?>