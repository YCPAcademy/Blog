<?php

	function valida_categoria ($text){
		
	$boleano=TRUE;
	    
		    if(!empty($text)){
	
				if(preg_match('/^[0-9a-zA-Z\-_+]{3,25}$/i', $text)){
					
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
	
	
	function valida_titulo ($text){
		
	$boleano=TRUE;
	    
		    if(!empty($text)){
	
				if(preg_match('/^[[0-9a-zA-Z\-_+ ]{4,15}$/i', $text)){
					
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





							