<?php 

	class Batmobile
	{
		protected $sopir;

		public function _construct($sopir)
		{
			$this->sopir = $sopir;
		}

		public function getsopir()
		{
			return $this->sopir;
		}
	}

	class Batman
	{
		public function nama($nama)
		{
			return $nama;
		}
	}

	$batman = new Batman();
	$batmobile = new Batmobile($batman);
	echo $batmobile->getsopir()->nama('Batman Manusia klelawar');