<?php
	
	function valida_form_contacta($data = array()){
		
		$alert = "";// aqui almacenamos el mensaje que mostramos según fuera todo.
		$num_item_array = count($data);// almacenamos el número de items que tiene el array
		
		foreach ($data as $key => $value) {
			
			if(empty($data[$key])){
				
				unset($data[$key]);
			}
		}
		
		if($num_item_array > count($data)){
			
			$alert = 'Todos los campos son obligatorios.';
			
		}else{
			
			if(isset($data['nombre']) AND $alert ==""){
				
				if(!preg_match('/^[a-zA-Z\-_]{4,15}$/i', $data['nombre']))
				$alert = 'El nombre no tiene un formato válido.';
				
			}
			
			
			if(isset($data['email']) AND $alert ==""){
				
				if(!preg_match('/^[a-z|\.|\_|\-]+@+[a-z|\.\_\-]+\.(org|com)$/i', $data['email']))
					$alert = 'El Email no tiene un formato válido.';

			}
			if(isset($data['telefono']) AND $alert ==""){
				
				if(!preg_match('/^[0-9]{9}$/', $data['telefono']))
					$alert = 'El Teléfono no tiene un formato válido.';
				
			}
			if(isset($data['cp']) AND $alert ==""){
				
				if(!preg_match('/^[0-9]{9}$/', $data['cp']))
				$alert = 'El cp no tiene un formato válido.';
				
			}
			if(isset($data['dni']) AND $alert ==""){
				
				if(!preg_match('/^[0-9]{8}+[a-z]{1}$/i', $data['dni']))
				$alert = 'El DNI no tiene un formato válido.';
				
			}
			if(isset($data['movil']) AND $alert ==""){
				
				if(!preg_match('/^[9|6|7][0-9]{8}$/', $data['movil']))
				$alert = 'El Móvil no tiene un formato válido.';
				
			}
			
		}
		
		if($alert ==""){
			
			$alert = "Su Correo se envio correctamente.";
			
			$para      = 'gatoburbuja@gmail.com';
			$titulo    = 'El título';
			$mensaje   = 'Hola';
			$cabeceras = 'From: webmaster@example.com' . "\r\n" .
			    'Reply-To: webmaster@example.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();
			
			mail($para, $titulo, $mensaje, $cabeceras);
			
		} 
		return $alert;
	}
?>




<!--if($_GET['nombre'] =="" AND $_GET['email'] == "" AND $_GET['comentario'] == ""){
									
										echo 'Todos Los campos son obligatorios';
									
								}else{
									
									if(!preg_match('/^[a-zA-Z\-_]{4,15}$/', $_GET['nombre'])){
										
										echo 'el nombre no es corrector';
									}
									
								}-->