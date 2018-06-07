<?php  
 /**
 * 
 */
 class CONEXION{
 	
 	public function conectar(){

 		$conexion=new PDO("mysql:host=localhost;dbname=senasoft","root","");
 		
 		return $conexion;


 	}
}



?>