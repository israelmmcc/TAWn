<? php

#CLASE:
//Una clase es un modelo que se utiliza para crear objetos que comparten un mismo comportamiento, estado o idientidad.
class Automovil{
	//PROPIEDADES:Son las caracterizticaas que puede tener un bijeto.

	public $marca;
	public $modelo;

	//METODOS: Es el algoritmo asociado a un objeto que indica la capacidad de lo que este puede hacer, la unica diferencia entre el metodo y funcion es que llamamos al metodo a las funciones de una clase (en poo) mientras que llamamos funciones a los algoritmos de la programacion estructurada.

	public function mostrar(){
		echo "<p> Hola soy un $this->marca, modelo $this->modelo</p>";
	}
}

//OBJETOS: Es una entidad provista de métodos o mensajes a los cuales responde propiedades con valores concretos

$a = new Automovil();
$a -> marca = "Chevrolet";
$a -> modelo = "Chevy";
$a -> mostrar();

//Principios de la poo que se cumplen en este ejemplo:

//1. Abstracción: Nuevos tipos de datos (el que quieras lo creas).
//2. Encapsulación: Organiza el código en grupos lógicos.
//3. Ocultamiento: Oculta detalles de implementación y expone solo los detalles que sean necesarios para el resto del sistema


?>