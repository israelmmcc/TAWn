<? php

//Codigo imperativo

$automovil1=(object)["marca"=>"Chevrolet","Modelo"=>"Chevy"];
$automovil2=(object)["marca"=>"Ford","Modelo"=>"Lobo"];
$automovil3=(object)["marca"=>"Honda","Modelo"=>"CRV"];

//Funcion con parametros para imprimir determinado automovil
function mostrar ($automovil){
	echo "<p> Hola soy un $automovi->marca, modelo $automovi->modelo</p>";
}

mostrar($automovil1);
mostrar($automovil2);
mostrar($automovil3);

?>