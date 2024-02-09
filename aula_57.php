<?php 

	# ABSTRACT CLASS #

	/* Implementação parcial, significa que tem métodos incompletos e devem obrigatoriamente ser implementadas nas classes que herdam.
	 * Não podem ser instanciadas 
	 */

	abstract class Forma{
		public $largura = 100, $altura = 200;

		abstract public function area();

		function altura(){
			return $this->altura;
		}
	}

	// $objeto = new Forma(); #Eu não posso criar um objeto a partir de uma classe abstrata
	
	class Rectangulo extends Forma{
		# Eu OBRIGATORIAMENTE tenho que implementar a função area()
		
		public function area(){
			return $this->largura * $this->altura;
		}
	}

	$r = new Rectangulo;
	echo $r->area() . "<br>" . $r->altura() . "<hr>";

	# TRATTS #
	
	// São métodos que podem ser inseridos dentro de classes

	trait Habilidades{
		public function speak($mensage){
			echo "I say $mensage!<br>";
		}

		public function jump($foots){
			echo "I jump $foots foots!<br>";
		}
	}

	class Human{
		use Habilidades; //Veja, eu importei métodos de uma trait
	}

	$me = new Human();
	$me->speak("hello");
	$me->jump("3");
?>
