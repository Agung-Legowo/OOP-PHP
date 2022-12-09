<?php

//parent class
	class Motor
	{
		protected $merk;

		public function setMerk($merk)
		{
			$this->merk = $merk;
		}

		
	} 

	//child class
	class MotorSport extends Motor 

	{
		
		public function halo()
		{
		return ' Hlo saya ' . $this->merk;
		}
	}

	//instance MotorSport
	$bmw = new MotorSport();
	$bmw->setMerk('bmw');
	echo $bmw->halo();
