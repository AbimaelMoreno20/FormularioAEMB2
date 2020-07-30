<?php

echo "esplode() Esta función se utiliza para dividir una cadena en varias<br/>";

echo "<br> <br>";

				$texto = "lorem ipsu.";

				echo "Texto original: ". $texto;

				echo "<br/>";

				$texto = explode(' ', $texto);

				echo "Cadena1: ". $texto[0];

				echo "<br/>";

				echo "Cadena2: ". $texto[1];

				echo "<br> <br>";

				$texto = "AngularJS Esta es de-Google.";

				echo "Texto original: ". $texto;

				echo "<br/>";

				$texto = explode('-', $texto);

				echo "Cadena1: ". $texto[0];

				echo "<br/>";

				echo "Cadena2: ". $texto[1];

				echo "<br> <br>";

				$texto = "LARAVEL y|PHP 8.";

				echo "Texto original: ". $texto;

				echo "<br/>";

				$texto = explode('|', $texto);

				echo "Cadena1: ". $texto[0];

				echo "<br/>";

				echo "Cadena2: ". $texto[1];
?>