<?php 

	interface Motor
	{
		public function setMerk($merk);

		public function getMerk();
	}

	interface KendaraanBeroda
	{
		public function setRoda($roda);

		public function getRoda();
	}

	class Honda implements Motor, KendaraanBeroda
	{
		private $merk;
		private $jumlahRoda;

		public function setMerk($merk)
		{
			$this->merk = $merk;
		}

		public function getMerk()
		{
			return $this->merk;
		}

		public function setRoda($roda)
		{
			$this->jumlahRoda = $roda;
		}

		public function getRoda()
		{
			return $this->jumlahRoda;
		}
	}

	$Honda = new Honda();
	$Honda->setMerk('Honda');
	$Honda->setRoda(2);
	echo 'Motor ' . $Honda->getMerk() . ' dengan ' .
			$Honda->getRoda() . ' roda.';