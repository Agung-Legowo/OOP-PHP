<?php

	abstract class  BangunDatar
	{
		abstract protected function hitungLuas();
	}

	class persegi extends BangunDatar
	{
		protected $sisi = 4;

		public function hitungLuas()
		{
			return pow($this->sisi, 2);
		}
	}

	class Segitiga extends BangunDatar
	{
		protected $alas = 4;
		protected $tinggi = 3;

		public function hitungLuas()
		{
			return (0.5 * $this->alas * $this->tinggi);
		}
	}

	class Lingkaran extends BangunDatar
	{
		protected $jariJari = 7;

		public function hitungLuas()
		{
			return (3.14 * pow($this->jariJari, 2));
		}
	}


	$persegi = new persegi();
	echo 'Luas persegi = ' . $persegi->hitungLuas() . "\n";

	$Segitiga = new Segitiga();
	echo 'Luas Segitiga = ' . $Segitiga->hitungLuas() . "\n";

	$Lingkaran = new Lingkaran();
	echo 'Luas Segitiga = ' . $Lingkaran->hitungLuas() . "\n";

