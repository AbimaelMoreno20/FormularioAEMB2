<?php

echo "Strtoupper() Esta función se utiliza para poder convertir los caracteres de yb string a mayúsculas<br/>";

echo "<br> <br>";

			$texto = "Quiero un perro.";

			echo "Texto original: ". $texto;

			echo "<br/>";

			echo "Texto con función: ". strtoupper($texto);

			echo "<br> <br>";

			$texto = "No hay perro queda solamente GATOS.";

			echo "Texto original: ". $texto;

			echo "<br/>";

			echo "Texto con función: ". strtoupper($texto);

			echo "<br> <br>";

			$texto = "GATOS.";

			echo "Texto original: ". $texto;

			echo "<br/>";

			echo "Texto con función: ". strtoupper($texto);
?>