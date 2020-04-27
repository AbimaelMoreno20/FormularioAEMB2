<?php
include('clasedb1.php');

extract($_REQUEST);

//echo $first_name. "-" .$firstlast_name. "-" .$dni;
$db=new clasedb1();
$con=$db->conectar();
$sql="INSERT INTO datos_personales VALUES(NULL,'".$nombre."','".$apodo."','".$especie."','".$carac."')";
$resultado=mysqli_query($con,$sql);

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
if ($resultado) {
	?>
	<b>Registro Ingresado ---> <a href="index.php">Volver</a></b>
	<?php

}else{
	?>
	<b>Registro no ingresado ---> <a href="index.php">Volver</a></b>
	<?php
}
?>

</body>
</html>