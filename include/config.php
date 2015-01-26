  <?php 
  
  	$base_url = "http://localhost/blog/admin/";
	
	$mysqli = new mysqli ('localhost', 'root', "", 'blog');
	if ($mysqli === FALSE)
		die ("Error al conectar con la base de datos".mysqli_connect_error());
	
  ?>