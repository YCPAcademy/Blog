<?php
	
	function valida_form_contacta($data = array()){
		
		$alert = "";// aqui almacenamos el mensaje que mostramos según fuera todo.
		$num_item_array = count($data);// almacenamos el número de items que tiene el array
		
		
					
			if(isset($data['name']) AND $alert ==""){
				
				if((empty($data['name'])) OR (!preg_match('/^[a-zA-Z\-_]{4,15}$/i', $data['name'])))
				$alert = 'El nombre está vacío o no tiene un formato válido.';
				
			}
			if(isset($data['email']) AND $alert ==""){
				
				if((empty($data['email'])) OR (!preg_match('/^[a-z|\.|\_|\-]+@+[a-z|\.\_\-]+\.(org|com|es)$/i', $data['email'])))
					$alert = 'El Email está vacío o no tiene un formato válido.';

			}
			if(isset($data['telefono']) AND $alert ==""){
				
				if (empty ($data['telefono'])){
				    $alert="";
				}else{
					if(!preg_match('/^[0-9]{9}$/', $data['telefono']))
						$alert = 'El Teléfono no tiene un formato válido.';
				}
			}
			if(isset($data['subject']) AND $alert ==""){
				
				if(empty($data['subject']))
				$alert = 'El asunto no puede ser vacío.';
				
			}
			if(isset($data['message']) AND $alert ==""){
				
				if(empty($data['message']))
				$alert = 'El mensaje no puede ser vacío.';
				
			}
			
		echo $alert;
		return $alert;
	}
?>




