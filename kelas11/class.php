<?php
//Calss adalah sebuah blueprint /template
// untuk membuat instance dari object
// Class Menyimpan data(property) dan prilaku(method)
// Membuat class 
class Kotcheng 
{
    //  membuat property 
    public $warna = "Oren";
    public $jumlah_kaki = 4;
    public $mkn_fav = "Lauk";

    // membuat method
    public function bersuara()
    {
        return "Miaww Auggg";
    }
}
    // membuat object baru
    // $kucing=new Kotcheng;
    // var_dump($kucing);
    // echo "<br>";
    // echo $kucing -> bersuara();
    class Perumahan
    {
        public $blok;
        public $nomor_rumah;
        public function pemilik(){
            return "Alamat Saya Di Komplek Kopo Indah Blok ".$this->blok." Nomor ". $this->nomor_rumah;
        }
       
    }
    $rumah1 = new Perumahan;
    $rumah1->blok="A";
    $rumah1->nomor_rumah="25";
    echo $rumah1->pemilik();
?>