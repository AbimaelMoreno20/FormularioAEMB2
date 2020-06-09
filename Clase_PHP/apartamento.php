<?php
/**
 * 
 */
class Apartamento
{
	public $nombre;
	public $fechaConstruccion;
	
	function __construct($nombre,fechaConstruccion)
	{
		$this->nombre = $nombre;
		$this->fechaConstruccion = $fechaConstruccion; 
		# code...
	}
	protected function ShowInfo()
	{
		foreach ($this as $key) {echo $key."<br/>";
			# code...
		}
	}
	public function getInfo()
	{
		$this->ShowInfo();
	}
}
$edi = new Apartamento("Dark",12);
$edi->getInfo();
?>