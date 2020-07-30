<?php

echo "ucfirst() Esta función se utiliza para poder convertidr en mayuscula en solo el primer caracter en una cadena<br/>";

echo "<br> <br>";

			$texto = "lorem ipsu.";

			echo "Texto original: ". $texto;

			echo "<br/>";

			echo "Texto con función: ". ucfirst($texto);

			echo "<br> <br>";

			$texto = "El REACT NATIVE ES EL MEJOR FRAMEWORK PARA FRONTEND.";

			echo "Texto original: ". $texto;

			echo "<br/>";

			echo "Texto con función: ". ucfirst(strtolower($texto));

			echo "<br> <br>";

			$texto = "LARAVEL y PHP 8.";

			echo "Texto original: ". $texto;

			echo "<br/>";

			echo "Texto con función: ". ucfirst(strtolower($texto));
?>

<?php

echo "ucwords() Esta función se utiliza para poder convertir en mayuscula solo el primer caracter de cada palabra de una cadena<br/>";

echo "<br> <br>";

			$texto = "lorem ipsu.";

			echo "Texto original: ". $texto;

			echo "<br/>";

			echo "Texto con función: ". ucwords($texto);

			echo "<br> <br>";

			$texto = "El REACT NATIVE ES EL MEJOR FRAMEWORK PARA FRONTEND.";

			echo "Texto original: ". $texto;

			echo "<br/>";

			echo "Texto con función: ". ucwords(strtolower($texto));

			echo "<br> <br>";

			$texto = "LARAVEL y PHP 8.";

			echo "Texto original: ". $texto;

			echo "<br/>";

			echo "Texto con función: ". ucwords(strtolower($texto));
?>