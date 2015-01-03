<?php
	require 'app/controller/mvc.controller.php';

     //se instancia al controlador
    	 
		$mvc = new mvc_controller();
	    if(isset($_GET['action'])){
		print($_GET['action']);
		
			if( $_GET['action'] == 'buscar' ) //muestra el modulo del buscador
			{	
					$mvc->buscador();	
			}
			else if( $_GET['action'] == 'buscaCode' ) //muestra  el modulo buscaCode
			{
					$mvc->buscador2();	
			}
			else if( $_GET['action'] == 'buscaCiudad' ) //muestra  el modulo buscarCiudad
			{
					$mvc->buscador3();	
			}
			else if( $_GET['action'] == 'insertaCiudad' ) //muestra  el modulo buscarCiudad
			{
					$mvc->buscadorInsertarCiudad();	
			}
		}
		else if( isset($_POST['pais']) )//muestra el buscador y los resultados
		{       //alert($_POST['pais']);
		        echo "<script> alert('Your input is correct');</script>";
				$mvc->buscar( $_POST['pais'] );
		}
		else if( isset($_POST['code']) )//muestra el buscador y los resultados
		{
				$mvc->buscar2( $_POST['code'] );
		}
		else if( isset($_POST['ciudad']) )//muestra el buscador y los resultados
		{
				$mvc->buscar3( $_POST['ciudad']);
		}
		else if(isset($_POST['name']) && $_POST['countrycode'])//muestra el buscador y los resultados
		{
		        
				$mvc->insertar( $_POST['name'] && $_POST['countrycode'] && $_POST['district'] && $_POST['population']);
				
		}
		
		
		else //Si no existe GET o POST -> muestra la pagina principal
		{	
			$mvc->principal();
		}
		
		
	

	

?>