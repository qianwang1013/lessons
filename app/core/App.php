<?php

class App
{
	protected $controller = 'Home';

	protected $method = 'index';

	protected $params = [];

	public function __Construct()
	{
		$url = $this->parseUrl();

		}
	}

	public function parseUrl(){
		if(isset($_GET['url'])){
			return $url = explode('/',filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
		}
	}
}