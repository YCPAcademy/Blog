<?php include "/include/config.php"; ?>
<?php include "/function/blogfunction.php"; ?>
<?php define ('LIMITER',1); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Blog | Corlate</title>
    
    <!-- core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>

  <?php include "/include/header.php"; ?>
  

    <section id="blog" class="container">
        <div class="center">
            <h2>Informática online</h2>
            <p class="lead">¡Bienvenido a este foro de informática! Soluciona todas tus dudas.</p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                 	
                 	<?php $sql = "SELECT * FROM post WHERE id_post=".$_GET['id_post'];?>
                 	
                 	  	<?php if ($result =$mysqli -> query ($sql)){ ?>
                        	
                        	  <?php if ($result -> num_rows >0){?>
                        	  	
                        	  	 <?php $row = $result -> fetch_assoc(); ?>
                        	  	 	
                        	  	 	 <div class="blog-item">
				                        <div class="row">
				                            <div class="col-xs-12 col-sm-2 text-center">
				                                <div class="entry-meta">
				                                	
				                                    <span id="publish_date"><?php echo date ("d-m-Y", strtotime($row ['date_post'])); ?></span>
				                                   
				                                </div>
				                            </div>
				                            
				                            <div class="col-xs-12 col-sm-10 blog-content">
				                                <a href="#"><?php $target_path="uploads"; echo '<img class="img-responsive img-blog" src="'.$target_path."/".$row['image_post'].'" width="100%" alt="" >';?></a>
				                                <h2><?php echo $row ['title_post']; ?></h2>
				                                <h3  align="justify"><?php echo $row['body_post']; ?></h3>
				                            </div>
				                        </div>    
				                    </div><!--/.blog-item-->
                        	  	 	
                        	  	 <?php } ?>
                        	  	 
                        	  <?php } ?>
               
                    
                    <ul class="pagination pagination-lg">
                    	
                    	<?php
                    	
							echo '<li class="active"><a href="'.$base_url.'index.php">Atrás</a></li>';
								
                    	 ?>
                    	
                       
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->
               
            </div><!--/.row-->
        </div>
    </section><!--/#blog-->

  <?php include "/include/footer.php"; ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>