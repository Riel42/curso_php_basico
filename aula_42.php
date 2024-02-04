<?php 
	
	#CLASS - OOP#

	#Basically, class is a new "type", wich you make your own characteristics and methods.
	#This class can be linked with a object!

	class Human{ #Class uses PascalCase (first letter capitalized)
		public $name = 'John';
		public $aka = 'Pereira';

		public function FullNameMethod(){
			return $this->name . ' ' . $this->aka; //$this references a property of a class
		}
	}

	$man = new Human(); //$man is a new object!

	echo $man->FullNameMethod();

	# CONSTRUCTOR #

	# Constructor is a special method into a class, and it's executed always when I create a object. It's a magic method!
	
	class Human2{
		private $name; 
		private $aka;

		function __construct($n, $a){
			$this->name = $n;
			$this->aka = $a;
		}

		public function FullName(){
			return $this->name . ' ' . $this->aka;
		}
	}

	$man = new Human2('John', 'Ribeiro');
	$woman = new Human2('Jessica', 'Pereira');

	echo "<hr>" . $man->FullName() . '<hr>' . $woman->FullName();
?>
