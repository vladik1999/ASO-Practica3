<!-- VLADISLAV BOGDANOV -->
<!-- 	 ASO - M06 	-->
<!-- 	   ASIX 2 	-->


<!--		FORMULARIO PARA CREAR EL GRUPO		-->

<html>
<head>
<title> Crear Grupo </title>
</head>
<body>
<?php
    echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
<form action="controller_create_group.php" method= "POST">
    <p> Nombre del grupo que desea crear </p>
    <p>Grupo: <input type="text" name="group" size="50"></p>
    <input type="submit" name="create" value="Enviar">
    <input type="submit" name="principal" value="Menu Principal">
  </p>
</form>
</body>
</html>