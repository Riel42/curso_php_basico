<?php
	# TYPE DECLARATIONS #

	function speak(string $mensage){ #You need pass a array value
		echo $mensage . "<hr>" ;
	}

	# speak(['a']); // it's doesn't work

	speak("Hello!");
	speak(1); # this number is a string #

	/**************************************************************/

	# CALLABLE --> IT'S A FUNCTION, METHOD OR OBJECT #
	
	$mensage  = function($text) { 
		echo $text . "<br>"; 
	};

	function using_callable( callable $function_here, $mensage_here){
		$function_here($mensage_here);
	}

	using_callable($mensage, 'test');
	
	/**************************************************************/

	function test():array{ // it's can return only arrays
		return [1, 2, 3];

		# return 'test'; // I cannot do that
	}

	/**************************************************************/
