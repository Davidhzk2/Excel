<?php  
class CRUD_MODELO extends CONEXION
{
	
	public function RegistroUsuarioModelo($datosmodelo,$nametable)
	{
	  	$stmt=CONEXION::conectar()->prepare("INSERT INTO $nametable(campo1,campo2)VALUES(:param1,:param2)");
	  	$stmt-> bindparam(":param1",$datosmodelo['value1'],PDO::PARAM_STR);
	  	$stmt-> bindparam(":param2",$datosmodelo['value2'],PDO::PARAM_STR);
	  	$stmt->execute();
	  	

	  	if ($stmt->execute()) {
	  		return "ok";
	  	}else{
	  		return "error";
	  	}
	}

    public function LogeoUsuarioModelo($datosmodelo,$nametable)
    {
      $stmt=CONEXION::conectar()->prepare("SELECT nombre,password FROM $nametable WHERE nombre=:nom and password=:pass ");
      $stmt->bindparam(":nom",$datosmodelo['logeo'],PDO::PARAM_STR);
      $stmt->bindparam(":pass",$datosmodelo['logeo'],PDO::PARAM_STR); 
      if($stmt->execute()) 
      {
	    return "ok";

	  }
	  else
	  {
	  		
	  	return "error";
	  }


    }

}





?>