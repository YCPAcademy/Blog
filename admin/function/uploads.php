   <?php
	
	function up_file($config = array()){
		
		$result = TRUE;
		$target_path = $config['path'] . basename( $_FILES[$config['input_name']]['name']); 

		if(isset($config['size'])){
			
			if ($_FILES[$config['input_name']]["size"] <= $config['size']) {
			   
			   $result = TRUE;
				
			}else{
				
				$result = FALSE;
			}
		}
		
		if(isset($config['width']) AND $result){
			
			$width = getimagesize($_FILES[$config['input_name']]["tmp_name"]);
			
			if ($width[0] <= $config['width']) {
			   
			   $result = TRUE;
				
			}else{
				
				$result = FALSE;
			}
		}
		
		if(isset($config['height']) AND $result){
			
			$height = getimagesize($_FILES[$config['input_name']]["tmp_name"]);
			
			if ($height[1] <= $config['height']) {
			   
			   $result = TRUE;
				
			}else{
				
				$result = FALSE;
			}
		}
		
		if($result){
		
			if(move_uploaded_file($_FILES[$config['input_name']]['tmp_name'], $target_path)) {
											
				$result = TRUE;
											
			}else{
											
				$result = FALSE;
			}
			
		}
		
		
		return 	$result;						
	}
	
	function delete_file($path, $file){
		
		unlink($path.$file);
	}
	
	function data_file($config = array()){
		
		$data = "";
		
		if(isset($config['size'])){
			
			$data .= 'Peso máximo permitido: '.$config['size']. ' Peso de la imgen: '.$_FILES[$config['input_name']]["size"].'<br/>';
		}
		
		if(isset($config['width'])){
			
			$width = getimagesize($_FILES[$config['input_name']]["tmp_name"]);
			$data .= 'Ancho máximo permitido: '.$config['width']. 'px Ancho de la imgen: '.$width[0].'px<br/>';
			
		}
		
		if(isset($config['height'])){
			
			$height = getimagesize($_FILES[$config['input_name']]["tmp_name"]);
			$data .= 'Alto máximo permitido: '.$config['height']. 'px Alto de la imgen: '.$height[1].'px';
		}
		
		return $data;
	}
	
	
?>
