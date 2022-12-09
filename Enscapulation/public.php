<?php

	class MotorJerman
	{
		public $merk;

		public function getMerk()
		{
			return $this->merk;
		}
	}

	$motor = new MotorJerman();
	$motor->merk = 'Bmw'; // proses pengaturan nilai property $merk dilakukan langsung dari luar, dengan mengakses langsung langsung property $merk dan memberikan nilai "Bmw".
	echo 'Merk motor adalah ' . $motor->getMerk();