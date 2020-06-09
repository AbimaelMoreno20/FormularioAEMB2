<?php
/**
 * 
 */
class Corredor
{
	public $nombre;
	public $edad;
	private $pasosTotales = 0;
	private $diasSinDeporte = 0;
	
	function __construct($nombre, $edad)
	{
		$this->nombre = $nombre;
		$this->edad = $edad;
		# code...
	}
	public function addPaso()
	{
		$this->pasosTotales +=47;
	}
	public function addDiaSin()
	{
		$this->diasSinDeporte +=1;
	}
	public function showStats()
	{
		$atleta = $this->nombre;
		$paso = $this->pasosTotales;
		$dias = $this->diasSinDeporte;
		echo "Estadisticas del corredor $atleta <br/>";
		echo "Pasos dado: $pasos <br/>";
		echo "Dias sin hacer deporte: $dias";
	}
}
?>