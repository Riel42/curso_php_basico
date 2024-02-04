<?php 
	# ACCESS LEVELS #

	class Test{
		public 		$var1;
		protected	$var2;
		private 	$var3;
	}

	$test = new Test();
	
	$test->var1 = 'It\'s possible, \'cause this class is public';
	// $test->var2 = '2'; #It's not possible, this variable is protected
	// $test->var3 = '3'; #It's not possible, this variable is private
	
	# PROTECTED #
	
	class TestProtected{
		protected $test = "a"; #I can modify this value only into to the class
		private $test1 = 'impossible'; #I can't modify this value

		function modify(){
			$test  = "b"; #It's possible
			// $test1 = "possible"; # It's impossible lol
		}

	}	

	$test_protected = new TestProtected();
	
	// $test_protected->test = "b"; #It's not possible
	// $test_protected->test1 = "c"; #Obvliously it's not possible
	
	# OBS: VAR IS EQUAL TO PUBLIC  #

	// ************************************************ //

	# OBJECT ACCESS (so weird)  #
	
	class Human{
		private name = 'Unknown';

		function setPrivate($object, $value){ #This function change a private value of another object
			$object->name = $value;
		}

		function showName(){
			echo $this->name;
		}
	}
	
	$unknown = new Human();
	$gustavo = new Human();

	$unknown->setPrivate($gustavo, 'Gustavo'); #Here, $gustavo has your name equal to 'Gustavo'!	

	$gustavo->showName();
 
?>
