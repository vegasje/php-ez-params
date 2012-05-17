php-ez-params
=============

A (very) simple parameter-fetching object for command line php scripts.

Jeremy Watkins
2012.05.05

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
