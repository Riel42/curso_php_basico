<?php 
	# STATIC #
		
	class Test{
		static $value_1; //You can access this property or this method without use an object (using ::)
		static $value_2;
		static function math(){ # exist only one time in the class
			return self::$value_1 + self::$value_2;
		}
	}	

	Test::$value_1 = 10; # I don't create an object, only call the class 
	Test::$value_2 = 20;
	echo Test::math();

	/* OR... */

	$test = Test::math();
	echo "<br>" . $test . "<hr>";

	class AnotherTest{
		static function randomNumber($min, $max){
			return rand($min, $max);
		}

		static function createAName(){
			$names = ['John', 'Guxtavo', 'Bebel', 'Wilter'];
			$aka = ['The Creator', 'Rad', 'Badass', 'Scatman'];

			return $names[rand(0, count($names)-1)] . " " . $aka[rand(0, count($aka)-1)];
		}
	}

	echo AnotherTest::randomNumber(42, 69) . "<br>";
	echo AnotherTest::createAName();
?>
