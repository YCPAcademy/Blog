<?php include "/include/config.php"; ?>	
<?php include "/funciones/valida_contrasena.php";?>
<?php  if(isset($_POST['submit'])){
		$sql="SELECT * FROM users WHERE email_user ='".$_POST['email_user']."' AND pass_user = '".sha1($_POST['pass_user'])."'";
			if ($result =$mysqli -> query ($sql)){
                    if ($result -> num_rows >0){
                         session_start();
                         $row = $result -> fetch_assoc();
                         $_SESSION['user_name']=$row['email_user'];
                         $mysqli->close();
                         header("Location:".$base_url."home.php");
						 
                   }else{
                   	
					echo "Usuario no encontrado.";
					
                   }
				   
             }else{
             	
				echo $mysqli->error;
				
             }
         }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/fontawesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Accede a tu panel de control</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input value="<?php if(isset($_POST['email_user'])) echo $_POST['email_user'] ?>" class="form-control" placeholder="E-mail" name="email_user" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input value="<?php if(isset($_POST['pass_user'])) echo $_POST['pass_user'] ?>" class="form-control" placeholder="Password" name="pass_user" type="password">
                                </div>
                                
                                <button type="submit" name="submit" class="btn btn-lg btn-success btn-block">Entrar</button>
                                <?php /*
                                
                                if(isset($_POST['submit'])){
                                	
                                	if (valida_contrasena ($_POST['email_user'],$_POST['pass_user'])==TRUE){
                                		
                                		echo "El usuario o la contraseña son correctas.";
										
                                	}else{
                                		
										echo "El usuario o la contraseña son erróneas.";
                                	}	
								}
								*/
                                ?>  
								
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>

</html>
