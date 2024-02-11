<?php

	# VARIABLES, ISSET, EMPTY, IS NULL AND UNSET  #
	
	# isset --> verify if a variable is set

	$var = null;

	echo isset($var) ? "Yes, it's set <br>" : "Nop, it isn't set <br>";

	#empty --> verify if variable is empty!

	echo empty($var) ? "Yeah, it's empty <br>" : "No, it isn't empty <br>";

	#is_null --> verify if variable is null (the type null)
	
	echo is_null($var) ? "Yep, it's null <br>" : "Nop, it isn't null";

	unset($var); # It's remove the variable on the application (in the garbage collector)

	/********************************************/

	# ?? OPERATOR  #

	// If you see this "??" in another script, watch this video: "PHP 8 #066 NULL COALESCING OPERADOR - João Ribeiro"
	
	#Basically...
	
	// $var = $another_var ?? 'No name'; 

	#...it's equal to:
	
	// $var = isset($another_var) ? $another_var : 'No name';
	
	/********************************************/

	# Verify types of variables  #
	
	// is_array()
	// is_bool()
	// is_callable() --> anonymous functions
	// is_float()
	// is_int()
	// is_null()
	// is_object()
	// is_string()
