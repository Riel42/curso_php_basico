<?php 

#HERANÇA#

class Animais{
	public $nome;
	public $peso;

	function tipoEspecie(){
		return "Este animal tem o nome {$this->nome} e pesa {$this->peso}";
	}
}

#A classe mamífero herda as propriedades de Animais
class Mamifero extends Animais{
	
	public $numero_de_pernas;
	public $tem_pelo;

	function caracteristicas(){
		return "Esse mamífero tem {$this->numero_de_pernas} pernas e seu nome é {$this->nome}";
	}
}

$gato = new Mamifero();
$gato->nome = 'Gato';
$gato->peso = '5kg';
$gato->numero_de_pernas = 4;

echo $gato->tipoEspecie() . "<hr>";
echo $gato->caracteristicas();

?>
