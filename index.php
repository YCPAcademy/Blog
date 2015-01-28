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
            <h2>Blogs</h2>
            <p class="lead">Pellentesque habitant morbi tristique senectus et netus et malesuada</p>
        </div>

        <div class="blog">
            <div class="row">
                 <div class="col-md-8">
                 	<?php 
                 		$start=0;
							if(isset($_GET['start'])){
								$start=$_GET['start'];
							}
                 	 ?>
                 	<?php $sql = "SELECT * FROM post LIMIT ".$start.",".LIMITER; // limita los posts que van a salir, limitamos a 5, posicionamos el puntero 
                 	//comienza en el inicio 0 y que me muestre 5 publicaciones. ?>
                 	
                 	  	<?php if ($result =$mysqli -> query ($sql)){ ?>
                        	
                        	  <?php if ($result -> num_rows >0){?>
                        	  	
                        	  	 <?php while ($post = $result -> fetch_array ()){ ?>
                        	  	 	
                        	  	 	 <div class="blog-item">
				                        <div class="row">
				                            <div class="col-xs-12 col-sm-2 text-center">
				                                <div class="entry-meta">
				                                	
				                                    <span id="publish_date"><?php echo date ("d-m-Y", strtotime($post ['date_post'])); ?></span>
				                                   
				                                </div>
				                            </div>
				                            
				                            <div class="col-xs-12 col-sm-10 blog-content">
				                                <a href="#"><?php $target_path="uploads"; echo '<img class="img-responsive img-blog" src="'.$target_path."/".$post['image_post'].'" width="100%" alt="" >';?></a>
				                                <h2><a href="blog-item.html"><?php echo $post ['title_post']; ?></a></h2>
				                                <h3><?php echo utf8_encode(blogdelimited ($post ['body_post'], 20)); ?></h3>
				                                <a class="btn btn-primary readmore" href="<?php echo $base_url."single_post.php?id=".$post["id_post"]?>" >Leer más <i class="fa fa-angle-right"></i></a>
				                            </div>
				                        </div>    
				                    </div><!--/.blog-item-->
                        	  	 	
                        	  	 <?php } ?>
                        	  	 
                        	  <?php } ?>
                        	  
                        <?php } ?>
                        	  	 	
				                   
                    
                    
                    <ul class="pagination pagination-lg">
                    	
                    	<?php
                    	
                    		$sql="SELECT id_post FROM post";
							$result =$mysqli -> query ($sql);
							$page=ceil($result->num_rows/LIMITER);
							//cuando le pasamos una división, el total del que nos de, le suma 1, por si hay 10 publicaciones y son 3
							//el límite de publicaciones por páginas, son 4 páginas las que necesitamos, no 3. Así tenemos el número de páginas
							//que vamos a tener. 
							$x=0;
							$active="";
							for($i=1;$i<=$page;$i++){
								
								if($i==1){
									if($start==0)$active='class="active"';
									echo '<li '.$active.'><a href="'.$base_url.'index.php">'.$i.'</a></li>';
									
								}else{
									
									$x+=LIMITER;
									if($start==$x)$active='class="active"';
									echo '<li '.$active.'><a href="'.$base_url.'index.php?start='.$x.'">'.$i.'</a></li>';
									
								}
								
								$active="";
								
							}
							
						
                    	
                    	 ?>
                       
                    </ul><!--/.pagination-->
                </div><!--/.col-md-8-->

               <?php include "/include/aside_right.php"; ?>
               
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