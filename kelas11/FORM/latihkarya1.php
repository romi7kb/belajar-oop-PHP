<?php
class Karyawan{
    public $nama,
            $nip,
            $alamat,
            $jhk;
        public function __construct($nama,$nip,$alamat,$jhk)
        {
            $this->nama = $nama;
            $this->nip = $nip;
            $this->alamat = $alamat;
            $this->jhk = $jhk;
        }
        public function infoKaryawan(){
            return "Nama : $this->nama<br>
                    NIP : $this->nip<br>
                    Alamat : $this->alamat<br>";
        }
}
class Gaji extends Karyawan 
{
    public function gajiKotor()
    {
        $gk = $this->jhk*75000;
        return $gk;
    }
    public function gajiBersih()
    {
        $gb = $this->gajiKotor()-($this->gajiKotor()*0.025);
        return $gb;
    }
}
if (isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];
    $jumlahHariKerja = $_POST['jumlahHariKerja'];
    $karyawan1 = new Gaji($nama,$nip,$alamat,$jumlahHariKerja);
    echo $karyawan1->infoKaryawan();
    echo "Gaji Kotor : ".$karyawan1->gajiKotor().
         "<br>";
    echo "Gaji Bersih : ".$karyawan1->gajiBersih();
}
?>