<?php 

	abstract class Mobil 
{
	protected $merk;
	protected $hp;

	public function _construct($merk)
	{
		$this->merk = $merk;
	}

	public function getMerk()
	{
		return $this->merk;
	}

	public function setHP($hp)
	{
		$this->hp = $hp;
	}

	public function getHp()
	{
		return $this->hp;
	}
}

trait TurboCharger
{
	private $hpTurbo = 150;

	public function turbo()
	{
		$this->hp += $this->hpTurbo;
	}
}

class Honda extends Mobil {}
class Toyota extends Mobil {}

class pontiac extends Mobil
{
	use TurboCharger;
}

$honda = new Honda('Honda Civic');
$honda->setHp(150);
echo $honda->getMerk() . " - " . $honda->getHp() . 
" PK \n";

$toyota = new Toyota('Toyota Fortuner');
$toyota->setHp(255);
echo $toyota->getMerk() . " - " . $toyota->getHp() .
" PK \n";

$mitsubhisi = new mitsubhisi('mitsubhisi PAJERO');
$mitsubhisi->setHP(200);
$mitsubhisi->turbo();
echo $mitsubhisi->getMerk() . " - " . $mitsubhisi->getHp() .
" PK \n";
