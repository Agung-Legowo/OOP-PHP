<?php

	class Lingkaran
	{
		const PI = 3.14;

		public function luas($jariJari)
		{
			return self::PI * pow($jariJari, 2);
		}
	}

	echo 'Jari-jari lingkaran: ' . Lingkaran::PI . "\n";

	$lingkaran = new Lingkaran();
	echo 'Luas lingkaran:' . $lingkaran->luas(14);