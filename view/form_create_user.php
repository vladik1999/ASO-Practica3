<!-- VLADISLAV BOGDANOV -->
<!-- 	 ASO - M06 	-->
<!-- 	   ASIX 2 	-->


<!--		FORMULARIO PARA CREAR EL USER		-->

<?php
echo "<h2>Registrar Usuario</h2> 
<form action='".$_SERVER['PHP_SELF']."' method='POST'> 
<p><label for='username'>Username: </label><br> 
<input type='text' name='user'></p> 

<p><label for='groupname'>Groupname: </label><br> 
<input type='text' name='group'></p> 

<p><label for='groupname'>Department: </label><br> 
<input type='text' name='department'></p> 

<p><label for='folder'>Folder: (Ej. /home/super) </label><br> 
<input type='text' name='folder'></p>

<p><label for='password'>Password: (Minimo 5 caracteres Mayus, numero, simbolo) </label><br> 
<input type='text' name='passw'></p>

<p><input type='submit' value='Registrarse' name='create'></p>
<p><input type='submit' value='Menú principal ' name='principal'></p>
</form>";
?>