<?php

//parent class
	class Motor
	{
		private $merk;

		public function setMerk($merk)
		{
			$this->merk = $merk;
		}

		public function getMerk()
		{
			return $this->merk;
		}

		public function halo()
		{
		return 'Tin....tin....halo saya adalah ' . $this->merk;	
		}
	} 

	//child class
	class MotorSport extends Motor {}

	//instance MotorSport
	$bmw = new MotorSport();
	$bmw->setMerk('bmw');
	echo $bmw->halo();

