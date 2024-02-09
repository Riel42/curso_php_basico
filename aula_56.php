<?php 

	# MAGIC CONSTANTS #


	echo __LINE__ . "<br>"; // Show the number of the line in this command

	echo __FILE__ . "<br>"; // Show the path of this script

	echo __DIR__ . "<br>"; // Show the directory when is this script

	function myName(){

		echo __FUNCTION__ . "<br>"; // Show the name of this function
	}
	
	myName();
?>
