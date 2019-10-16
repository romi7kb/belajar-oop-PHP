<?php
class Keluarga 
{
    public $nama,
            $nik,
            $alamat,
            $umur;
    public function __construct($nama,$nik,$alamat,$umur)
    {
        $this->nama=$nama;
        $this->nik=$nik;
        $this->alamat=$alamat;
        $this->umur=$umur;
    }
    public function DataDiri()
    {
       return "Nama : $this->nama<br>
              NIK : $this->nik<br>
              Alamat : $this->alamat<br>
              Umur : $this->umur<br>";
    }
}
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $nik = $_POST['nik'];
    $alamat = $_POST['alamat'];
    $umur = $_POST['umur'];    
    echo "<h2>Daftar Anggota Keluarga</h2>";
    foreach ($nama as $i => $value) { 
        $orang = new Keluarga($nama[$i],$nik[$i],$alamat[$i],$umur[$i]);
        echo "<hr>";
        echo $orang->DataDiri();
        echo "<hr>";
    }
}

?>