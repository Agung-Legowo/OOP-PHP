<?php

	class MotorJerman
	{
		private $merk; 

		public function setMerk($merk) // baris 7-10 method setmerk() berfungsi sebagai setter yang berguna untuk mengatur nilai private property $merk
		{
			$this->merk = $merk;
		}

		public function getMerk() // baris 12-15 method getmerk() berfungsi sebagai getter yang berguna untuk mendapatkan  nilai private property $merk
		{
			return $this->merk;
		}
	}

	$motor = new MotorJerman();
	$motor->setMerk('Bmw'); // untuk mengatur nilai $merk, sekarang kita memakai set merk
	echo 'Merk motor adalah ' . $motor->getMerk();