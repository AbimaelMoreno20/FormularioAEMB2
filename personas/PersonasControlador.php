<?php
include("../clasedb.php");
extract($_REQUEST);

class PersonasControlador
{

	public function index(){
		$db=new clasedb();//instancia clasedb
		$conex=$db->conectar();//conectando con la base de datos

		$sql="SELECT * FROM datos_personales";//query

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

	static function controlador($operacion){
		$persona=new PersonasControlador();
	switch ($operacion) {
		case 'index':
			$persona->index();
			break;
		case 'registrar':
			//$persona->registrar();
			break;
		case 'guardar':
			//$persona->guardar();
			break;
		case 'modificar':
			//$persona->modificar();
			break;
		case 'actualizar':
			//$persona->actualizar();
			break;
		case 'eliminar':
			//$persona->eliminar();
			break;
		
		default:
			?>
			<script type="text/javascript">
			alert("No existe la ruta");
			window.location="PersonasControlador.php?operacion=index";
		   </script>
		   <?php
			break;
	}
	}
}
PersonasControlador::controlador($operacion);