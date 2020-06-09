<?php

/**
 * 
 */
class gato
{
	public $nombre;
	public $raza;
	function __construct($nombre,$raza)
	{
		$this->nombre = $nombre;
		$this->raza = $raza;
		# code...
	}
	public function changename($newName) {
		$this->nombre = $newName;
		echo "cambiaste el nombre del gato a $newName";
	}
}
?>
