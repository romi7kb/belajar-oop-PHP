<?php
class Hp 
{
    public $chipset = "SD845";
    public function __construct(){
        echo "Menghidupkan Hp<br>";
    }
    public function __destruct(){
        echo "Mematikan Hp<br>";
    }
}
class Aplikasi extends Hp 
{
    public $nama_aplikasi;
    public function __construct($nama_aplikasi){
        $this->nama_aplikasi = $nama_aplikasi;
        parent::__construct();
        echo "Membuka Aplikasi $this->nama_aplikasi<br>";
    }
    public function memutar_video(){
        echo "Memutar Video di $this->nama_aplikasi<br>";
    }
    public function __destruct(){
        echo "Menutup Aplikasi $this->nama_aplikasi<br>";
        parent::__destruct();
    }
}
$youtube = new Aplikasi("Youtube");
echo $youtube->memutar_video();
?>