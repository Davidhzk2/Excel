<?php  

 /**
 * 
 */
 class CRUD_CONTROLLER extends CONEXION
 {
 	/**
	* funcion para registrar usuarios
	*/
 	
 	public function RegistroUsuarioController();
 	{
 		if (!empty($_POST['registro'])) {
 			
 			$datos = array('value1' => $_POST['registro'] ,'value2' => $_POST['registro']);

 			$respuesta= CRUD_MODELO::RegistroUsuarioModelo($datos,"nametable");
 		}


 		if ($respuesta=="ok") {
 			header("location:controlador.CRUD.php");
 		}else{
 			header("location:controlador.CRUD.php");
 		}
 	}


    /**
	* funcion para logearse
	*/

 	public function LogeoUsuarioController();
 	{
 		if (!empty($_POST['logeo'])) {

 			$contrasena=crypt($_POST['logeo'],"")
 			
 			$datos = array('value1' => $_POST['logeo'] ,'value2' => $contrasena);

 			$respuesta= CRUD_MODELO::RegistroUsuarioModelo($datos,"nametable");
 		}


 		if ($respuesta=="ok") {

 			session_start();

 			$_SESSION["ingreso"]=true;

 			header("location:pagina_principal.php");
 			
 		}else{
 			echo "<script languaje='javascript'>alert('El Correo ya esta en uso');location.href = 'logeo.php';</script>";
 		}
 	}


 	/**
	* funcion para registrar usuarios
	*/
 	
 	public function ActualizarUsuarioController();
 	{
 		if (!empty($_POST['registro'])) {
 			
 			$datos = array('value1' => $_POST['registro'] ,'value2' => $_POST['registro']);

 			$respuesta= CRUD_MODELO::RegistroUsuarioModelo($datos,"nametable");
 		}


 		if ($respuesta=="ok") {
 			header("location:controlador.CRUD.php");
 		}else{
 			header("location:controlador.CRUD.php");
 		}
 	}
 }



?>