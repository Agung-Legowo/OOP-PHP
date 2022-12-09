<?php

	class url
	{
		//method lainnya...

		public static function redirect($url)
		{
			header("Location: $url");
			exit;
		}

	}
	//penggunaan method redirect()
	url::redirect('https://github.com/Agung-Legowo');