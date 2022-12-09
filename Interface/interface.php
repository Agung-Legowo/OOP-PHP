<?php 

	interface Motor
	{
		public function setMerk($merk);

		public function getMerk();
	}

	class Honda implements Motor
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
	}

	$Honda = new Honda();
	$Honda->setMerk('Honda');
	echo $Honda->getMerk();