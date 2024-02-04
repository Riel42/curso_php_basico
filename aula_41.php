<?php 

	#GENERATORS#

	#Generator works like a iterator, and give back the values while the function's called

	function lookForNumbers(){ // **look for = buscar**
		for($i=0; $i < 10; $i++){
			yield $i;
		}
	}

	foreach(lookForNumbers() as $number){
		echo "$number<br>";
	}
	
	function lookForNames(){
		yield 'John';
		yield from ['Karl', 'Guxtavo', 'Wilter'];
		yield 'Pepe';
	}

	echo "<hr>";
	foreach(lookForNames() as $name){
		echo "$name<br>";
	}
?>
