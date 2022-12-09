<?php  

class Motor
{
	private $merk;
	private $harga;
	private $lunas;
	private $jumlahknalpot;

	public function setMerk(string $merk)
	{
		$this->merk = $merk;
	}

	public function setharga(float $harga)
	{
		$this->harga = $harga;
	}

	public function setLunas(bool $lunas)
	{
		$this->lunas = $lunas;
	}

	public function setKnalpot(int $knalpot)
	{
		$this->jumlahknalpot = $knalpot;
	}

}

	$honda = new Motor();
	$honda->setMerk('Honda');
	$honda->setharga('10000000');
	$honda->setKnalpot('2');
	$honda->setLunas('true');
	var_dump($honda);
