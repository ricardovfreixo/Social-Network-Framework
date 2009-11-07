<?php

	#doc
	#	classname:	Conf
	#	scope:		PUBLIC
	#
	#/doc
	
	class Conf
	{
		#	internal variables
		
		var $db   = array();
		var $main = array();
		
		
		#	Constructor
		function __construct ()
		{
			// ------------------------------------------			
			// Set database stuff
			$db['server']   = 'localhost';
			$db['user']     = 'root';
			$db['pass']     = 'topmxg';
			$db['database'] = 'framework';
			$this->db = $db;
			// ------------------------------------------
			// Set global stuff
			$main['base_url'] = 'http://localhost/framework/';
			$this->main = $main;
			// ------------------------------------------
		}
		###	
	
	}
	###
