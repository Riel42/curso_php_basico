<?php

	# STRICT TYPING #

	declare(strict_types=1); # Now, the types of functions must be strictly your types

	function speak(string $mensage){
		echo "Your mensage: {$mensage}<hr>";
	}
	speak("Hello!"); /* I can do that */

	# speak(1); /* I cannot do that! */

	function null_and_string(?string $mensage){ // With the ?string I can use string and null values
		echo "Your mensage: {$mensage}<hr>";
	}

	null_and_string(null);

	function int_and_string(int|string $mensage){ // With the type 1|type 2 I can use both types on my function
		echo "Your mensage: {$mensage}<hr>";
	}

	int_and_string(1001);
	int_and_string("Goofy ahhhhh 💀");

	function pass_and_return_int_or_float(int|float $x, $y): int|float{
		return $x*$y;
	}

	echo pass_and_return_int_or_float(3, 20.5);

	/********************************/

	# OTHER EXAMPLES #
	
	$my_boolean = true;
	echo "<hr>" . (int)$my_boolean . "<br>"; # This return 1 #

	$names = [
		'asdasdasd',
		'hjhjghjgh',
		'xbxcbvcbc'
	];

	$names_1 = (object)$names;
	echo "<pre>";
	print_r($names_1);
