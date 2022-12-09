<?php

	class Latihan
	{
		//static property
		public static $namaproperty = 'property static'; // deklarasi static $namaproperty

		//static method
		public static function namaMethod() // baris 9-12 deklarasi static method namaMethod
		{
			return 'Halo saya static method';
		}
	}

	echo Latihan::$namaproperty ."\n"; //untuk mengakses static property dari luar class
	echo Latihan::namaMethod() ."\n";	//untuk mengakses static method dari luar class