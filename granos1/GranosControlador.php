<?php
include("../clasedb1.php");
extract($_REQUEST);

class PersonasControlador
{

	public function index(){
		$db=new clasedb1();//instancia clasedb
		$conex=$db->conectar();//conectando con la base de datos

		$sql="SELECT * FROM granos_especs";//query

		$res=mysqli_query($conex,$sql);//ejecutando query
		$campos=mysql_num_fields($res);//cuantos campos trae la consulta
		$filas=mysql_num_rows($res);//cuantos registros trae la consulta
		$i=0;
		$datos[]=array();//inicializacion array
		//extrayendo datos
		while ($data=mysqli_fetch_array($res)) {
			for ($j=0; $j <$campos ; $i++) { 
				$datos[$i][$j]=$data[$j];
			}
			$i++;
		}
		mysqli_close($conex);
		//enviando datos
		header("location: index.php?filas=".$filas."$campos=".$campo. "$data" .serialize($datos));
	}//fin de la funcion index

	public function modificar(){
		extract($_REQUEST);//extrayendo valores de url
		$db=new clasedb1();
		$conex=$db->conectar();//conectando con la base de datos

		$sql="SELECT * FROM granos_especs WHERE id=".$id_granos."";
		$res=mysqli_query($conex,$sql); //ejecutando consulta
		$data=mysql_fetch_array($res); //extrayendo datos en array

		header("Location: editar.php?data=".serialize($data));
	}

	public function actualizar()
	{
		extract($_POST); //Extrayendo variable del formulario
		$db=new clasedb1();
		$conex=$db->conectar();//conectando con la base de datos

		$sql="SELECT * FROM granos_especs WHERE cedula=".$especie." AND id<>".$id_granos; //echo $sql
		$res=mysqli_query($conex,$sql);
		$cant=mysqli_num_rows($res);//trae cuantos registros trae la consulta
		    if ($cant>0) {
		    	?>
		    	<script type="text/javascript">
		    		alert("ESPECIE YA REGISTRADA");
		    		window.location="GranosControlador.php?operacion=index";
		    	</script>
		    	<?php
		    }else{
		    	$sql="UPDATE granos_especs SET nombres='".$nombre."',apodo='".$apodo."',especie=".$especie.",carac=".$carac." WHERE id="-$id_granos;
		    	$res=mysqli_query($conex,$sql);
		    	if($res) {
		    		?> 
		    		<script type="text/javascript">
		    		alert("REGISTRO MODIFICADO");
		    		window.location="GranosControlador.php?operacion=index";
		    		</script>
		    		<?php
		    	} else {
		    		?>
		    		<script type="text/javascript">
		    			alert("ERROR AL MODIFICAR EL REGISTRO");
		    			window.location="GranosControlador.php?operacion=index";
		    		</script>
		    		<?php
		    	}
		    }
	} //Fin de la funcion actualizar

	public function eliminar()
	{
		extract($_REQUEST);
		$db=new clasedb1();
		$conex=$db->conectar();

		$sql="DELETE FROM granos_especs WHERE id=".$id_granos;

		$res=mysqli_query($conex,$sql);
		if ($res) {
			?>

			<script type="text/javascript">
				alert("REGISTRO ELIMINADO");
				window.location="GranosControlador.php?operacion=index";
			</script>
			<?php
		} else {
			?> <script type="text/javascript">
				alert("REGISTRO NO ELIMINADO");
				window.location="GranosControlador.php?operacion=index";
			</script>
			<?php
		}
	} //end of function delete

	static function controlador($operacion){
		$granos=new GranosControlador();
	switch ($operacion) {
		case 'index':
			$granos->index();
			break;
		case 'registrar':
			$granos->registrar();
			break;
		case 'guardar':
			$granos->guardar();
			break;
		case 'modificar':
			$granos->modificar();
			break;
		case 'actualizar':
			$granos->actualizar();
			break;
		case 'eliminar':
			$granos->eliminar();
			break;
		
		default:
			?>
			<script type="text/javascript">
			alert("No existe la ruta");
			window.location="GranosControlador.php?operacion=index";
		   </script>
		   <?php
			break;
	}
	}
}
GranosControlador::controlador($operacion);