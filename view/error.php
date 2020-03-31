<?php
### VLADISLAV BOGDANOV ###
### 	ASO - M06      ###
### 	 ASIX 2        ###


//PAGINA PHP CON CODIGO HTML QUE MUESTRA UN TITULO CON UN MENSAJE DE ERROR

echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
echo "<h2>Algo ha salido mal :/</h2>";
echo "<p><input type='submit' value='Menú principal ' name='principal'></p>";
echo "</form>";
?>