<?php

	# PRINT_R, VAR_DUMP AND VAR_EXPORT #

	// it's  used for debug

	echo "<pre>"; # custom the way to print_r works (it's show  most better)

	$name = "John";
	print_r($name);

	echo "<br>";

	$array_ = ['a', 'b', 2];
	print_r($array_);

	echo "<br>";

	# For more informations, use var_dump #
	
	var_dump($name);
	echo "<br>";
	var_dump($array_);

	echo "<br>";

	# It's show the value of variable like a php code
	
	$numbers = [];
	
	for($i = 0; $i < 10; $i++){
		$numbers[$i] = rand(0, 9);
	}
	var_export($numbers); # I can copy the output on my application and paste in a variable!

	$var_export_output = array (
  		0 => 8,
  		1 => 7,
  		2 => 3,
  		3 => 1,
  		4 => 9,
  		5 => 7,
  		6 => 8,
  		7 => 7,
  		8 => 8,
  		9 => 2,
	);

	echo "<hr>" . $var_export_output . "<br>";
