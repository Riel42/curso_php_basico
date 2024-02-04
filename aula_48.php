<?php 

	# OVERRIDE # //Override == reescrever

	# create a derivative class using Override  #

	class Animal{
		function walk(){
			echo "The animal's walking now!";
		}
	}

	class Fish extends Animal{
		function walk(){ //I'm overriding this function
			echo "The fish's swimming now!";
		}
	}

	$cat = new Animal();
	echo $cat->walk() . "<hr>";

	$fish = new Fish();
	echo $fish->walk() . "<hr>";


	# PARENT CLASS #
	
	class Rectangle{
		public $width, $height;

		function __construct($w, $h){
			$this->width = $w;
			$this->height = $h;
		}

		function Area(){
			return $this->width * $this->height;
		}
	}

	class Square extends Rectangle{
		function __construct($s){ //Here, I use a override changing the constructor!
			parent::__construct($s, $s); //Here, basically I set width and height equal to size!
		}
	}

	$rectangle = new Rectangle(2, 3);
	echo $rectangle->Area() . "<br>";

	$square = new Square(2);
	echo $square->Area() . "<br>";
?>
