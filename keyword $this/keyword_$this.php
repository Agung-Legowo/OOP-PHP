<?php 

	class Motor
	{
		public $merk = 'Kawasaki';

		public function sebutMerk()
		{
			//mengakses property $merk
			$merk = $this->merk; //mendapatkan niliai properti

		//mengubah format dan mengembalikan property $merk
			return $this->lowercase($merk); //memanggil mehthod lowercase
		}

		public function lowercase($merk) // baris 16-19 membuat method lowercase() untuk mengubah format merk
		{
			return strtolower($merk);
		}
	}

	$motor = new motor();
	echo $motor->sebutMerk();