<?php
class Komputer
{
    public $processor = "Intel core i7 ";
    public function __construct()
    {
        echo "Ini Dari Construct class Komputer<br>";
    }
    public function __destruct()
    {
        echo "Ini Dari destruct class Komputer<br>";
    }
}
class Laptop extends Komputer
{
    public function __construct()
    {
        parent::__construct();
        echo "Ini Dari construct class Laptop<br>";
    }
    public function spesifikasi(){
        echo "Spesifikasi Laptop : $this->processor<br>";
    }
    public function __destruct()
    {
        echo "Ini Dari destruct class Laptop<br>";
        parent::__construct();
    }
}
$laptop1=new Laptop;
echo $laptop1->spesifikasi();
?>