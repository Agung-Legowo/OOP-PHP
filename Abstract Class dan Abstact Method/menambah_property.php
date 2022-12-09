<?php

	abstract class  Motor
	{
		protected $volTangki;

		public function isiBensin ($vol)
		{
			$this->volTangki = $vol;
		}

		abstract protected function jarakTempuhMaksimum();
	}

	class Yamaha extends Motor
	{
		protected $perliter = 2;

		public function jarakTempuhMaksimum()
		{

	$jarakMaks = $this->perliter * $this->volTangki;
	echo 'Jarak Tempuh maks Yamaha ' . $jarakMaks . " km \n";
	}

	class Honda extends Motor
	{
		protected $perliter = 1;

		public function jarakTempuhMaksimum()
		{
	$jarakMaks = $this->perliter * $this->volTangki;
	echo 'jarak Tempuh maks Honda ' . $jarakMaks . " km \n";
		}
	}


	$Yamaha = new Yamaha();
	$Yamaha->isiBensin(2);
	$Yamaha->jarakTempuhMaksimum();

	$Honda = new Honda();
	$Honda->isiBensin(1);
	$Honda->jarakTempuhMaksimum();