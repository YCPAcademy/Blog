 <aside class="col-md-4">
                   
                    <div class="widget categories">
                        <h3>Categories</h3>
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
                        <h3>Archieve</h3>
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="blog_archieve">
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> 7/2013 <span class="pull-right">(97)</span></a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> 12/2013 <span class="pull-right">(32)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> 5/2013 <span class="pull-right">(19)</a></li>
                                    <li><a href="#"><i class="fa fa-angle-double-right"></i> 9/2013 <span class="pull-right">(08)</a></li>
                                </ul>
                            </div>
                        </div>                     
                    </div><!--/.archieve-->

    			</aside>  