<?php

	require('conf.class.php');
	require('router.class.php');

	class Application 
	{
	
		var $conf;
		var $system;
		var $load;
		var $router;
	
		function __construct ()
		{
			$this->conf   = new Conf;
			$this->router = new Router;
		}
	
		
	
	}
