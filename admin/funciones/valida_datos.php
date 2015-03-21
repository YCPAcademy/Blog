<?php define ('width',620); ?>
<?php define ('height',295); ?>
<?php

	function valida_categoria ($text){ //validamos que la categoría sea de 3 a 25 caracteres, y que pueda contener números, letras y espacios en blanco.
									   //Comprueba también que no esté vacía.
		
		$boleano=TRUE;
	    
		    if(!empty($text)){
	
				if(preg_match('/^[0-9a-zA-Z\s]{3,25}$/i', $text)){
					
					$boleano=TRUE;
					
				}else{
					
					$boleano=FALSE;
				}
				
			}else{
				
				$boleano=FALSE;
			}
	
		return $boleano;
	}
	    
		
	function valida_email ($text){ 
		
		$boleano=TRUE;
	    
		    if(!empty($text)){
	
				if(preg_match('/^[a-z|\.|\_|\-]+@+[a-z|\.\_\-]+\.(org|com|es)$/i', $text)){
					
					$boleano=TRUE;
					
				}else{
					
					$boleano=FALSE;
				}
				
			}else{
				
				$boleano=FALSE;
			}
	
		return $boleano;
	}                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
		

	
	function cumple_tamano ($target_path){ //la foto tiene que cumplir con el ancho y alto establecidos.
		
		$boleano=TRUE;
		$img_fuente=@imagecreatefromjpeg($target_path) ;
		$img_ancho=imagesx($img_fuente); 
		$img_alto=imagesy($img_fuente); 
		   
			 if (($img_ancho = width) AND ($img_alto = height)){
			   	
			   $result = TRUE;
				
			}else{
				
				$result = FALSE;
			}
				
			
			return 	$result;						
	
		}
?>





							