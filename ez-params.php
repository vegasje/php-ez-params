<?php

/*
	PHP EZ Params
	Jeremy Watkins
	2012.05.05
	
	Description:
	EZ Params allows for simple fetching of command-line parameters
	
	Use:
	(command line)
	php some_script.php -a value1 -b value2 -c value3 value4 value5
	
	(php)
	$ezp = new Ez_Params($argv); // $argv must be passed into the class
	print_r($ezp->get('c'));
	
	returns:
				Array
				(
					 [0] => value3
					 [1] => value4
					 [2] => value5
				)
*/

class Ez_Params {
	
	private $args = array();
	
	public function __construct($argv) {
		$current_arg = null;
		$params = array_slice($argv, 1);
		
		foreach ($params as $arg) {
			if (substr($arg, 0, 1) === '-' && !is_numeric($arg)) {
				$current_arg = substr($arg, 1);
				$this->args[$current_arg] = array();
			} else {
				$this->args[$current_arg][] = $arg;
			}
		}
	}
	
	public function get($arg) {
		return isset($this->args[$arg]) ? $this->args[$arg] : null;
	}

}
