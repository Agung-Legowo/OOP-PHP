<?php

	class Mobil
	{
		private $merk;

		public function _construct(string $merk)
		{
			$this->merk = $merk;
		}

		public function jalan(sopir $sopir)
		{
			echo $this->merk . " siap \n";
			echo $sopir->identitas() . " siap \n";
			echo "Berangkat....";
		}
	}

	interface sopir
	{
		public function identitas();
	}

	class Manusia implements sopir
	{
		private $nama;

		public function _construct(string $nama)

		{
			$this->nama = $nama;
		}

		public function identitas()
		{
			return $this->nama;
		}
	} 

	class Robot implements sopir
	{
		private $nama;
		private $versi;

	public function _construct(string $nama, string $versi)
		{
			$this->nama = $nama;
			$this->versi = $versi;
		}

		public function identitas()
		{
			return "$this->nama $this->versi";
		}
	}

	$batman = new Manusia('Batman Manusia Kalelawar');
	$batmobile = new Mobil ('Batmobile');
	$batmobile->jalan($batman);