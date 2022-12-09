<?php

	class Motor
	{
		public static $km = 0;

		public function jalan($jarak)
		{
			self::$km += $jarak;
		}
	}

	$motor = new Motor();
	$motor->jalan(20);
	echo Motor::$km . "\n";

	$motor2 = new Motor();
	$motor2->jalan(10);
	echo Motor::$km . "\n";