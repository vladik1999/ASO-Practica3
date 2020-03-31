<!-- VLADISLAV BOGDANOV -->
<!-- 	 ASO - M06 	-->
<!-- 	   ASIX 2 	-->


<!--		FORMULARIO CON LAS OPCIONES		-->

<html>
<head>
<title> Pagina principal </title>
</head>
<body>
<?php
	echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
 <input type="radio" name="option" value="create_user">Crear nuevo Usuario<br>
 <input type="radio" name="option" value="list_user">Ver todos los usuarios<br>
 <input type="radio" name="option" value="create_group">Crear nuevo grupo<br>
 <input type="radio" name="option" value="list_groups">Ver todos los grupos<br>
 <input type="radio" name="option" value="create_user_file">Crear los usuarios a partir de un fichero<br><br>

  <input type="submit" name='submit' value='Enviar'>
</form>
</body>
</html>