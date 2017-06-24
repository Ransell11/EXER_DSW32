<?php

$option=(isset($_REQUEST['opcion'] ) ?$_REQUEST['option']:0);


     switch($option){
		 
		 case"pag1":{
			 
			 echo "primera pagina";
			 break;
		 }
		 
		 
		case"pag2":{
			
			echo "segunda pagina";
			  
			  break;
			  
		}
		
		case "pag3" :{
			echo "tercera pagina";
			break;
		}
		  default:{
			  break"<h5>Error</h5>";
			

		  }
	 }
	 




?>