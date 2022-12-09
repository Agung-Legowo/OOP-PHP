<?php 

 class motor // membuat class
 {
 	public $merk ='';
 	public $tipe ='';

 	public function maju() //membuat method maju
 	{
 		return "brooommmm...\n";
 	}
 }

 //membuat dan mengatur property object 1
 $motor = new motor(); // membuat object, diikuti nama kelasnya
 $motor->merk = 'honda'; //mengatur property
 $motor->tipe = 'matic';

 //mencetak prperty $ menajalankan method maju () object
 	echo $motor->merk . " ".$motor->tipe." "
 		 .$motor->maju();

 //membuat dan mengatur property object 2
 $motor2 = new motor();
 $motor2->merek = 'yamaha';
 $motor2->tipe =  'kopling';

 //mencetak property & menjalankan method maju() objct
 echo $motor2->merk . " " . $motor2->tipe . " "
 	  .$motor2->maju();

//