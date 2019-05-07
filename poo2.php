<?php
//Definir clase para mostrar propiedades de libros
class libro {
public $titulo = "Título de libro";
public $autor = "Autor de libro";
public $annoPublicacion = "2019";
public $numeroHojas = "Hojas por defecto de 234";
public $editorial = "Editorial de la UPV";
}

?>

<!DOCTYPE html>
<html>
<head>
	<title> Página de datos de libro</title>
</head>


<?php

$libro1 = new libro ();

?>

<h1 align="center"> <? php 

echo $libro1->titulo; 

?>
</h1>
<body>
</body>
</html>