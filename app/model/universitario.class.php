<?php
/*
 CLASE PARA LA GESTION DE LOS UNIVERSITARIOS
*/
require_once "db.class.php";

class universitario extends database {

	/* REALIZA UNA CONSULTA A LA BASE DE DATOS EN BUSCA DE  REGISTROS UNIVERSITARIOS DADOS COMO
	     PARAMETROS LA "CARRERA" Y LA "CANTIDAD" DE REGISTROS A MOSTRAR
		 INPUT:
		 $carrera | nombre de la carrera a buscar
		 $limit | cantidad de registros a mostrar
		 OUTPUT:
		 $data | Array con los registros obtenidos, si no existen datos, su valor es una cadena vacia
	 */
	function universitarios($pais)
	{
		//conexion a la base de datos
		//echo $pais;
		//echo $parametroBusqueda;
		$this->conectar();		
		$query = $this->consulta("SELECT * FROM country WHERE name = '$pais';");
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		{		
				//se llenan los datos en un array
				while ( $tsArray = $this->fetch_assoc($query) ) 
					$data[] = $tsArray;			
		
				return $data;
		}else
		{	
			return '';
		} 
	}
	
	
	function buscaCode($code)
	{
		//conexion a la base de datos
		//echo $pais;
		//echo $parametroBusqueda;
		$this->conectar();		
		$query = $this->consulta("SELECT * FROM country WHERE code = '$code';");
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		{		
				//se llenan los datos en un array
				while ( $tsArray = $this->fetch_assoc($query) ) 
					$data[] = $tsArray;			
		
				return $data;
		}else
		{	
			return '';
		} 
	}
	
	function buscaCiudad($ciudad)
	{
		//conexion a la base de datos
		//echo $pais;
		//echo $parametroBusqueda;
		$this->conectar();		
		$query = $this->consulta("SELECT * FROM city WHERE name = '$ciudad';");
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0) // existe -> datos correctos
		{		
				//se llenan los datos en un array
				while ( $tsArray = $this->fetch_assoc($query) ) 
					$data[] = $tsArray;			
		
				return $data;
		}else
		{	
			return '';
		} 
	}
	
	
	
}

?>