 <aside class="col-md-4">
                   
                    <div class="widget categories">
                        <h3>Categorias</h3>
                        <div class="row">
                            <div class="col-sm-6">
                            	
                            	<ul class="blog_category">
                            	
                            	<?php $sql = "SELECT category.name_category, COUNT('id_post') AS num_post FROM post JOIN category ON
                            	      category.id_category = post.id_category GROUP BY post.id_category"; ?>
	
                           					<?php if ($result =$mysqli -> query ($sql)){ ?>
                        	
                        	  					<?php if ($result -> num_rows >0){?>
                        	  	
                        	  	 					<?php while ($post = $result -> fetch_array ()){ ?>
  	
							                           	<li><a href="#"><?php echo $post["name_category"]?><span class="badge"><?php echo $post["num_post"]?></span></a></li>
  
							                          <?php } ?>
							                          
							                       <?php } ?>
							                       
							                    <?php } ?>
							                    
							                    </ul>
							                    
			                            </div>
			                        </div>                     
			                    </div><!--/.categories-->
    				
    				<div class="widget archieve">
                        <h3>Archivos</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                	
                                		<?php $sql = "SELECT date_format(date(date_post), '%d-%m-%Y') AS datepost, COUNT(date(date_post)) AS num_post FROM post GROUP BY(date(date_post))"; ?>
	
                           					<?php if ($result = $mysqli -> query ($sql)){ ?>
                        	
                        	  					<?php if ($result -> num_rows >0){?>
                        	  	
                        	  	 					<?php while ($archive = $result -> fetch_array ()){ ?>
  	
							                           	 <li><a href="#"><i class="fa fa-angle-double-right"></i><?php echo $archive["datepost"]?><span class="pull-right"><?php echo $archive["num_post"]?></span></a></li>
  
							                          <?php } ?>
							                          
							                       <?php } ?>
							                       
							                    <?php } ?>
                                    
			                                </ul>
			                            </div>
			                        </div>                     
			                    </div><!--/.archieve-->

    			</aside>  