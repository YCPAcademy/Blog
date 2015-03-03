  
    <header id="header">
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-4">
                        <div class="top-number"><p><i class=""></i></p></div>
                    </div>
                    <div class="col-sm-6 col-xs-8">
                       <div class="social">
                            <ul class="social-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                            
                       </div>
                    </div>
                </div>
            </div><!--/.container-->
        </div><!--/.top-bar-->

        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="logo"></a>
                </div>
                
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                    	
                    	<?php
                    	
                    		$url=$_SERVER['REQUEST_URI']; //Obtengo la página actual
				
				   
									if ($url=='/blog/contacto.php'){
										
											echo '<li><a href="'.$base_url.'index.php">Blog</a></li>';
										    echo '<li class="active"><a href="'.$base_url.'contacto.php">Contacto</a></li>';
											echo '<li><a href="'.$base_url_login.'index.php" target="_blank">Login</a></li>';
									
									}else {
										
											echo '<li class="active"><a href="'.$base_url.'index.php">Blog</a></li>';
										    echo '<li><a href="'.$base_url.'contacto.php">Contacto</a></li>';
											echo '<li><a href="'.$base_url_login.'index.php" target="_blank">Login</a></li>';
											
									}
				          
						 ?>

				        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
        
    </header><!--/header-->
	
  