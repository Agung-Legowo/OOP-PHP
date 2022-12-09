<?php

//parent class
	class Motor
	{
		final public function mesin()
		{
			return 'Mesin Bensin';
		}
	}

	//Child Class
	class MotorSport extends Motor
	{
		public function Mesin()
		{
			return ' Motor Elektrik';
		}
	}
	

	//instance alva
	$alva = new MotorListrik();
	echo $alva->Mesin();
