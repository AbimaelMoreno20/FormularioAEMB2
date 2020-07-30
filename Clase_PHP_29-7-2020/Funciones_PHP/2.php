<?php

echo "count() Esta funcion se utiliza para contar los elementos de una array<br/>";

echo "<br> <br>";

$var = array('ElectronJS', 'Laravel', 'Vue', 'ES6', 'Angular', 'Ionic', 'Redux', 'MongoDB', 'React');

						echo "Array1: ". count($var). " elementos";

						echo "<br> <br>";		

$var = array(2,3,4,5,6);

						echo "Array2: ". count($var). " elementos";

						echo "<br> <br>";	

$var = array();

						echo "Array3: ". count($var). " elementos";
?>