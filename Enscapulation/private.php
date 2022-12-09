<?php

	class MotorJerman
	{
		private $merk; // mengubah prperty $merk menjadi private, seharusnya  ketika proprty diubah menjadi private, maka property itu tidak lagi diakses dari luar class, jika itu dilakukan, akan muncul pesan eror.

		public function getMerk()
		{
			return $this->merk;
		}
	}

	$motor = new MotorJerman();
	$motor->merk = 'Bmw'; // mencoba memberikan nilai property
	echo 'Merk motor adalah ' . $motor->getMerk();