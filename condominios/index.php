<?php
include('conexion.php');
extract($_REQUEST);
$db=new conexion();
$conex=$db->conectar();

$sql="CREATE TABLE inmuebles (id int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, idem varchar(50) NOT NULL, estacionamiento enum('Si','No'), status enum('Ocupado','Desocupado','Mantenimiento'), tipo enum('Casa','Apartamento','Chalet','Quinta','Otro'), cod_postal varchar(5))";

$result=mysqli_query($conex,$sql);

if($result)
{
	echo 'Tabla Creada';
	$sql="ALTER TABLE inmuebles ADD UNIQUE (idem)";
	$result=mysqli_query($conex,$sql);
	if($result)
	{
		echo ' y se logro asingar el atributo UNIQUE al campo idem';
	}else{
		echo ' aunque no se logro asingar el atributo UNIQUE al campo idem';
	}
}else{
	echo 'No se pudo crear la tabla o ya existe';
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Inmuebles</title>
</head>
<body>
	<br><a href="add.php">Ingresar Registros</a><br>
	<table align="center">
		<tr align="center">
			<th colspan="6" bgcolor="silver">Datos de Registro</th>
		</tr>
		<tr align="center">
			<td>ID</td>
			<td>Identificacion</td>
			<td>Estacionamiento</td>
			<td>Estatus</td>
			<td>Tipo</td>
			<td>Codigo Postal</td>
		</tr>
		<?php 
 			$sql="SELECT * FROM inmuebles";
 			$res=mysqli_query($conex,$sql);
 			while($reg=mysqli_fetch_array($res))
 			{
 		?>
 		<tr align="center">
 		<td bgcolor="orange"><?php echo $reg['id']; ?></td>
 		<td><?php echo $reg['idem']; ?></td>
 		<td><?php echo $reg['estacionamiento']; ?></td>
 		<td><?php echo $reg['status']; ?></td>
 		<td><?php echo $reg['tipo']; ?></td>
 		<td><?php echo $reg['cod_postal']; ?></td>
 		</tr>
 		<?php } ?>
 		</tr>
	</table>

</body>
</html>
