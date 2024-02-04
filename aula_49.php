<?php 

	 class Veiculo{
		final function mover(){ //Não quero que façam override desta função, então marco-a como versão final
		
		}
	}	

	class Bicicleta extends Veiculo{
		//function mover(){} #Esse override não funcionará
	}

	//POSSO USAR FINAL PARA CLASSES TAMBÉM, OU SEJA, ESSAS CLASSES NÃO PODEM SER EXTENDIDAS!
?>
