<?php

	class Motor
	{
		public function maju()
		{
			$maju = $this->injakkopling();
			$maju .= $this->ubahperslening();
			$maju .= $this->injakgas();
			$maju .= 'brooommmm...';
			echo $maju;
		}

		private function injakkopling()
		{
			return "injak kopling \n";
		}

		private function ubahperslening()
		{
			return "ubah perslening \n";
		}

		private function injakgas()
		{
			return "injak gas \n";
		}

	}

	$motor = new Motor();
	$motor->maju();