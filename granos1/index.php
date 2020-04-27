<?php
extract($_REQUEST);
$data=unserialize($data);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de Categorias</title>
	<script type="text/javascript">
		function eliminar(id) {
			if (confirm("Seguro que desea eliminar el registro?")) {
				window.location="/GranosControlador.php?operacion=eliminar&id_granos="+id;
			}
		}
	</script>
</head>
<body>
<table align="center">
	<a href="../index.php">Inicio</a>
	<center><a href="GranosControlador.php?operacion=registrar"></a>Registrar</center>
    <tr><th>Nro</th><th>Nombre</th><th>Apodo</th><th>Especie</th><th>Caracteristicas</th><th>Opciones</th></tr>
    <?php $num=1;
    for ($i=0; $i < $filas; $i++){
    	echo "<tr>";
    	?>
    <td><?=$num?></td>
    <?php for ($j=1; $j < $campos; $j++) { ?>
    <td><?=$data[$i][$j]?></td>
    <?php } ?>
    <td><a href="GranosControlador.php?operacion=modificar&id_granos=<?$data[$i][0]?>">Modificar</a>
    <a href="javascript:eliminar(<?=$data[$i][0]?>">Eliminar</a>
    </td>
    <?php
         $num++;
    }  ?>
</table>
</body>
</html>