<?php

	class Motor 
	{
		public $tangki = 0;

		public function isiMinyak($liter)
		{
			$this->tangki +=$liter;
			return $this; // baris 10 dan dan 18 method isi minyak() dan kendarai mengembalikan $this-> sebagai nilai baik.

		}

		public function kendarai($jarak)
		{
			$terpakai = $jarak / 30;
			$this->tangki -= $terpakai;
			return $this;
		}
	}

	$Motor = new Motor();
	$sisaMinyak = $Motor->isiMinyak(2)->kendarai(30)->tangki; // penggunaan teknik method chaining
	echo "sisa minyak = " . $sisaMinyak . "liter."; // menampilkan sisa tangki