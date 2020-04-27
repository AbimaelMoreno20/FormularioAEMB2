<?php  
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Editando Granos</title>
</head>
<body>
<br>
<form action="GranosControlador.php" method="post" name="legumbres">
	<table>
		<tr>
			<td>Nombre:</td><td><input type="text" name="nombre" id="nombre" placeholder="Ej: Caraotas" title="ingrese el nombre" value="<?=$data[1]?>"></td>
		</tr>

		<tr>
			<td>Apodo:</td><td><input type="text" name="apodo" id="apodo" placeholder="Ej: Zaragozas Negras" title="ingrese el apodo" value="<?=$data[2]?>"></td>
		</tr>

		<tr>
			<td>Especie:</td><td><input type="text" name="especie" id="especie" placeholder="Ej: " title="ingrese la especie" value="<?=$data[3]?>"></td>
		</tr>

		<tr>
			<td>Caracteristicas:</td><td><input type="text" name="carac" id="carac" placeholder="Ej: Negras" title="ingrese las Caracteristicas" value="<?=$data[4]?>"></td>
		</tr>
		<tr>
			<td>
				<input type="hidden" name="id_granos" value="<?=$data[0]?>">
				<input type="hidden" name="operacion" value="actualizar">
				<input type="submit" name="enviar" value="Enviar">
			</td>
		</tr>
	</table>
</form>
</body>
</html>