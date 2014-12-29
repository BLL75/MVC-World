<?php
	require 'app/controller/mvc.controller.php';

     //se instancia al controlador
    	 
		$mvc = new mvc_controller();
	    
			if( $_GET['action'] == 'buscar' ) //muestra el modulo del buscador
			{	
					$mvc->buscador();	
			}
			else if( $_GET['action'] == 'history' ) //muestra  el modulo "historia de Bolivia"
			{
					$mvc->historia();	
			}
			else if( isset($_POST['pais']) )//muestra el buscador y los resultados
			{
					$mvc->buscar( $_POST['pais'] );
			}
			else //Si no existe GET o POST -> muestra la pagina principal
			{	
				$mvc->principal();
			}
		
		
	

	

?>