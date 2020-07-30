<?php

echo "implode() Esta función se utiliza para unir elementos de un array con un string<br/>";

echo "<br> <br>";

			$textoArray = array('buenas', 'noches.');

			$textoArray = implode(' ', $textoArray);

			echo "Array1: ". $textoArray;

			echo "<br> <br>";

			$textoArray = array('enero', 'febrero', 'marzo', 'abril', 'mayo');

			$textoArray = implode('.-.', $textoArray);

			echo "Array2: ". $textoArray;

			echo "<br> <br>";

			$textoArray = array('House', 'Chillstep', 'FutureBass.');

			$textoArray = implode(',', $textoArray);

			echo "Array3: ". $textoArray;
?>