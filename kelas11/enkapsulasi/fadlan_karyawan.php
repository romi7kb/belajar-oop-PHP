<?php
class Karyawan 
{
    public $nama,
           $pekerjaan,
           $tahun_bekerja;
    protected $gaji;
    private $gjmanager = 5000000,
            $gjob = 500000 ;
    public function setData($nama = "Mahmud" ,$pekerjaan = "ob",$tahun_bekerja = "7"){
        $this->nama=$nama;
        $this->pekerjaan=$pekerjaan;
        $this->tahun_bekerja=$tahun_bekerja;
    }
    public function getData(){
        if ($this->pekerjaan == "manager" && $this->tahun_bekerja>=10) {
            $this->gaji = $this->tahun_bekerja * $this->gjmanager;
        }
        elseif ($this->pekerjaan == "ob" && $this->tahun_bekerja>=10) {
            $this->gaji = $this->tahun_bekerja * $this->gjob;
        }
        elseif ($this->pekerjaan == "manager" && $this->tahun_bekerja>=5) {
            $this->gaji = $this->tahun_bekerja * ($this->gjmanager-1000000);
        }
        elseif ($this->pekerjaan == "ob" && $this->tahun_bekerja>=5) {
            $this->gaji = $this->tahun_bekerja * ($this->gjob-100000);
        }
        return $this->gaji;
    }
}
$karyawan1 = new Karyawan;
$karyawan1 -> setData();
echo "Nama : $karyawan1->nama<br>";
echo "Pekerjaan : $karyawan1->pekerjaan<br>";
echo "Tahun Bekerja : $karyawan1->tahun_bekerja<br>";
echo "Gaji : ".$karyawan1->getData();
?>