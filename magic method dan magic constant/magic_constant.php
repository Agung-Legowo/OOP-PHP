<?php

	class Motor
	{
		public $merk = '';

		public function _construct($merk = 'Yamaha')
		{
			$this->merk = $merk;
		}

		public function getMerk()
		{
		return 'Merk '._CLASS_. ' ini adalah: ' . $this->merk; // penggunaan _class_ untuk mendapatkan nama class dari object			
		}
	}

	$motor = new motor("yamaha nmax");
	echo $motor->getMerk();