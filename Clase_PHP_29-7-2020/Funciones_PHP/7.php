<?php

$numero = 32.5463692138;

			echo "Redondear un número decimal:<br/>";

			echo "Número: ". $numero . "<br/>";

			echo "Número redondeado: ". round($numero) . "<br/>";

			echo "<br/> <br/>";

			echo "Redondear un número decimal dejando solo 4 decimas:<br/>";

			echo "Número: ". $numero . "<br/>";

			echo "Número redondeado: ". round($numero, 4) . "<br/>";

			echo "<br/> <br/>";

			echo "Redondear un número decimal dejando solo 9 decimas:<br/>";

			echo "Número: ". $numero . "<br/>";

			echo "Número redondeado: ". round($numero, 9) . "<br/>";
?>