<?php
	require_once("modelo.php");
	$Calculos = new Calculos($_POST['result']);
	
		if (strpos($_POST['result'], '+')) { 
			die( $Calculos->sumar());	 		
		}
		
		if (strpos($_POST['result'], '-')) { 
			die( $Calculos->restar());	 		
		}
		
		if (strpos($_POST['result'], '/')) { 
			die( $Calculos->dividir());	 		
		}
		
		if (strpos($_POST['result'], '*')) { 
			die( $Calculos->multiplicar());	 		
		}
		
