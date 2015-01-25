<?php

	function valida_contrasena ($email,$password){
		
	
		$boleano=TRUE;
		
		$sql="SELECT * FROM users WHERE email_user ='".$email."' AND pass_user = '".sha1($password)."'";
			
			if ($result =$mysqli -> query ($sql)){
				
                    if ($result -> num_rows >0){
                         session_start();
                         $row = $result -> fetch_assoc();
                         $_SESSION['user_name']=$row['email_user'];
                         $mysqli->close();
						 header("Location:".$base_url."home.php");
						 $boleano=TRUE;
                         
						 
                   }else{
                   	
					$boleano=FALSE;
					
                   }
				   
             }else{
             	
				$boleano=FALSE;;
				
             }
         

	
		return $boleano;
	
	}
?>





							