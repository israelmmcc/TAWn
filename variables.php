<? php


//Variable numerica
$numero=5;
echo"Esto es un numero: $numero<br>";
var_dump($numero);
echo"<br><br>";


//Palabra

$palabra = "ITI";
echo"Esto es una palabra: $palabra <br>";
var_dump($palabra);
echo"<br><br>";

$booleana=true;
echo"Esto es una variable booleana<br>";
var_dump($booleana);
echo"<br><br>";

//Arreglos unidimensionales
$arregloColores=array("rojo","amarillo");
echo"Esto es una variable de array:$arregloColores[1]<br>";
var_dump($arregloColores);
echo "<br><br>";


//Variable arreglo con propiedades
$arregloVerduras = array ("verdura1"=>"lechuga","verdura2"=>"cebolla");
echo "Esto es un array con propiedades $arregloVerduras [verdura1]<br>";
var_dump($arregloVerduras);
echo "<br><br>";


//Variables de tipo objeto
$frutas=(object)["fruta1"=>"pera","fruta2"=>"manzana"];
echo "Esto es una variable de tipo objeto: $frutas->fruta1<br>";
var_dump($frutas);
echo "<br><br>";






?>