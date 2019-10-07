<?php  

// define('NAMA', 'Saya');// tidak bisa di simpan didalam class
// echo NAMA;
// echo "<br>";

// const UMUR =90;//bisa digunakan didalam class
// echo UMUR;

// class coba{
// 	const NAMA ='saya';
// }

// echo coba::NAMA;

// 	
	class coba{
		public $class=__CLASS__;
	}
	$o=new coba;
	echo $o->class;






?>