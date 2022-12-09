<?php

	class Motor
	{
		public $merk = '';

		public function _construct($merk = 'Honda') // memberikan nilai default honda,yang akan otomatis diberikan kepada $merk ketika tidak memberikan merk saat proses pembuatan object
		{
			$this->merk = $merk;
		}

		public function getMerk()
		{
			return 'Merk motor adalah ' . $this->merk;
		}
	}

	$motor = new Motor();
	echo $motor->getMerk();

	//selain_construct(),berikut bebrapa magic method lainnya

	//_destruct()		_call()			_callstatic()
	//_get()			_set()			_isset()
	//_unset()			_sleep()		_wakeup()
	//_tosString()		_invoke()		_set_state()
	//_clone()			_debugInfo()