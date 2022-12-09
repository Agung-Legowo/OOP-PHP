<?php

	class MotorJerman
	{
		private $merk; // property $merk adalah private property untuk mengubah nilainya harus memakai setmerk()

		public function setMerk($merk) // 7-13 memiliki daftar merk yang disimpan pada array $merkjerman ketika dijalankan akan memeriksa nilai dari $merk.
		{
			$merkJerman = ['Bmw', 'Mz', 'Dkw', 'Simson'];
			if (in_array($merk, $merkJerman)) {
				$this->merk = $merk;
			}
		}

		public function getMerk()
		{
			return $this->merk;
		}
	}

	$motor = new MotorJerman();
	$motor->setMerk('Bmw'); //memberikan nilai merek
	echo 'Merk motor adalah ' . $motor->getMerk();