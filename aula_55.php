<?php 
	# DEFINE #

	#Define is a global or local functions, and you can't modify your value
	
	define('APP_NAME', 'My Application');
	define('MY_FAVORITE_NUMBER', 42);

	echo APP_NAME . "<br>" . MY_FAVORITE_NUMBER . "<br>";

	echo "<hr>";

	# I can define new defines lol
	
	if(!defined('NAMES')){
		define('NAMES', ['Bebel', 'Guxtavo', 'Dora']);	
	}

	foreach(NAMES as $names){
		echo $names . "<br>";
	}
	
	echo "<hr>";
	
	# CONSTANTS #
	
	#Constants is like a private value, constants are public tho. Constants are global!

	class Circle{
		const PI = 3.14;
	}

	echo "PI is equal to " . Circle::PI;	
?>
