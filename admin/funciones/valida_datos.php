<?php

	function valida_datos ($text){
		
	$boleano=TRUE;
	    
		    if(!empty($text)){
	
				if(preg_match('/^[a-zA-Z\-_]{4,15}$/i', $text)){
					
					ucwords (strtolower ($text));
					$boleano=TRUE;
					
				}else{
					
					$boleano=FALSE;
				}
				
			}else{
				
				$boleano=FALSE;
			}
	
		return $boleano;
	}
	
?>





							