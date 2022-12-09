<?php 

	class Calculator
	{
		protected $motor;

		public function _construct(Motor $motor)
		{
			$this->motor = $motor;
		}

		public function hitungJarak()
		{
			$bbm = $this->motor->getBbm();
			$efisiensi = $this->motor->getEfisiensi();
			$jarakMaks = $bbm * $efisiensi;
			return $jarakMaks;
		}
	}

	abstract class Motor
	{
		protected $merk = '';
		protected $bbm = 0;

		public function _construct(string $merk,int $bbm)
		{
			$this->merk = $merk;
			$this->bbm = $bbm;
		}

		public function getMerk()
		{
			return $this->merk;
		}

		public function getBbm()
		{
			return $this->Bbm;
		}

		abstract public function getEfisiensi();
	}

	class Yamaha extends Motor
	{
		protected $efisiensi = 20;

		public function getEfisiensi()
		{
			return $this->efisiensi;
		}
	}

	class Honda extends Motor
	{
		protected $efisiensi = 15;

		public function getEfisiensi()
		{
			return $this->efisiensi;
		}
	}

	$yamaha = new Yamaha('Yamaha R25', 20);
	$calculator = new calculator($yamaha);
	echo "Jarak maksimum " . $yamaha->getMerk() . " adalah " .
			$calculator->hitungJarak() . " km. \n";

	$honda = new honda('Honda CBR 250', 20);
	$calculator = new calculator($honda);
	echo "Jarak maksimum " . $honda->getMerk() . " adalah " .
			$calculator->hitungJarak() . " km. \n";