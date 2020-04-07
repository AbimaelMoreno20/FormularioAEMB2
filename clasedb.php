<?php
   class clasedb{
   	private $db;
   	public function conectar(){
   		$this->db= mysqli_connect("localhost","root","","programacion") or die ("No se pudo conectar con mysql");

   		return $this->db; 
   	}
   }

   ?>