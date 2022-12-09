<?php 

	interface BangunDatar
	{
		public function hitungLuas();
	}

	class Persegi implements BangunDatar
	{
		private $sisi;

		public function _construct($sisi)
		{
			$this->sisi = $sisi;
		}

		public function hitungLuas()
		{
			return pow($this->sisi, 2);
		}
	}

	class Segitiga implements BangunDatar
	{
		private $alas;
		private $tinggi;

		public function _construct($alas, $tinggi)
		{
			$this->alas = $alas;
			$this->tinggi = $tinggi;
		}

		public function hitungLuas()
		{
			return (0.5 * $this->alas * $this->tinggi);
		}
	}

	class Lingkaran implements BangunDatar
	{
		private $jariJari;

		public function _construct($jariJari)
		{
			$this->jariJari = $jariJari;
		}

		public function hitungLuas()
		{
			return (3.14 * pow($this->jariJari, 2));
		}
	}

	$Persegi = new Persegi(4);
	echo 'Luas Persegi = ' . $Persegi->hitungLuas() . "\n";

	$Segitiga = new Segitiga(4, 5);
	echo 'Luas Segitiga = ' . $Segitiga->hitungLuas() . "\n";

	$Lingkaran = new Lingkaran(7);
	echo 'Luas Lingkaran = ' . $Lingkaran->hitungLuas() . "\n";
