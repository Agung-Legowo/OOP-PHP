<?php

//parent class
	class Motor
	{
		public $merk = 'Yamaha';

		public function Klakson()
		{
			return 'Tin...tin....';
		}
	}

	//Child Class
	class MotorSport extends Motor
	{
		public $merk = 'Honda';

		public function Klakson()
		{
			return ' Tet...Tot...';
		}
	}
	


	//instance MobilSport
	$bmw = new MotorSport();
	echo $bmw->merk;
	echo $bmw->Klakson();
