<?php
class Bangundatar
{
    
}
class Lingkaran extends Bangundatar
{
    public $jari_jari;
    public function __construct($jari_jari)
    {
        $this->jari_jari=$jari_jari;
    }
    public function Luas()
    {
        return "Luas Lingkaran : ".(3.14*$this->jari_jari*$this->jari_jari);
    }
    public function Keliling()
    {
        return "Keliling Lingkaran : ".(2*3.14*$this->jari_jari);
    }
    public function __destruct(){
        echo "<br>ini dari destruct";
    }    
}
$lingkaran1 = new Lingkaran(7);
echo "Jari Jari Lingkaran : ".$lingkaran1->jari_jari."<br>";
echo $lingkaran1->Luas();
echo "<br>";
echo $lingkaran1->Keliling();
?>