<?php

	# REQUIRE AND INCLUDE #

	# se o include falhar, há um aviso de erro, mas não termina a aplicação
	# já o require aparece um erro fatal e a aplicação não executa

	# O REQUIRE É MAIS USADO POR QUE É MELHOR A APLICAÇÃO NÃO EXECUTAR DO QUE EXECUTAR COM ERROS	
	
	/**********************************************************************/

	# INCLUDE ONCE AND REQUIRE ONCE #	

	# Include once e require once: inclui um script apenas uma vez. Ou seja, se eu tentar importar um script 2 vezes, ele só incluirá uma vez #
	
	// include_once 'test.php'; # essa linha é executada
	// include_once 'test.php'; # essa linha NÃO é executada
	// require_once 'test.php'; # essa linha NÃO é executada 
	
	$example = require_once 'list.php';

	foreach($example as $e){
		echo $e . "<br>";
	}

	echo "<hr>";

	print_r($example); # Mostra um array com os dados e seus respectivos índices #
