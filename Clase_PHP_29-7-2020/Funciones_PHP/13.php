<?php

echo "var_dump() Esta función se utiliza para poder mostrar toda la informacion que contiene una variable<br/>";

echo "<br> <br>";

			$var = array('ElectronJS', 'Laravel', 'Vue', 'ES6', 'Angular', 'Ionic', 'Redux', 'MongoDB', 'React');

			echo "Variable: ";

			var_dump($var);

			echo "<br> <br>";

			$var = 107.17;

			echo "Variable: ";

			var_dump($var);

			echo "<br> <br>";

			$texto = "LARAVEL y PHP 8.";

			echo "Variable: ";

			var_dump($texto);
?>