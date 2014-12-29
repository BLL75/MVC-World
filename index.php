<?php
	require 'app/controller/mvc.controller.php';

     //se instancia al controlador
    	 
		$mvc = new mvc_controller();
	    if(isset($_GET['action'])){
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
		}
		else if( isset($_POST['pais']) )//muestra el buscador y los resultados
		{
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
		else //Si no existe GET o POST -> muestra la pagina principal
		{	
			$mvc->principal();
		}
		
		
	

	

?>