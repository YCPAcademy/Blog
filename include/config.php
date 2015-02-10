  <?php 
  
  	$base_url = "http://localhost/blog/";
	$base_url_contacto = "http://localhost/blog/blog_front/";
	$base_url_login = "http://localhost/blog/admin/";
	
	$mysqli = new mysqli ('localhost', 'root', "", 'blog');
	$acentos = $mysqli->query("SET NAMES 'utf8'");
	if ($mysqli === FALSE)
		die ("Error al conectar con la base de datos".mysqli_connect_error());
	
  ?>