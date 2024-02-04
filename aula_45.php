<?php 

	#Property Promotion
	
	#On the Constructor, I can define properties directly on the parameters of the constructor

	class Human{
		function __construct(public $name, public$aka){
			$this->name = $name;
			$this->aka = $aka;
		}
	}

	$man = new Human('Bebel', 'Radical');

	echo $man->name . ' ' . $man->aka;


	# ANONYMOUS CLASS  #

	#It's a class for you use only 1 time
	
	$example = new class{
		function test(){
			echo "<hr>It's a bullshit";
		}
	};

	$example->test();
?>
