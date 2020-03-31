<!-- VLADISLAV BOGDANOV -->
<!-- 	 ASO - M06 	-->
<!-- 	   ASIX 2 	-->


<!--		FORMULARIO PARA LISTAR EL USER		-->


<html>
<head></head>

<body>

<?php
	echo "<form action='".$_SERVER['PHP_SELF']."' method='POST'>";
?>
<table>
	<tr><td>Usuari&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>Grup&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>La resta</td></tr>
</table>
	<?php
#		print_r($users);
		foreach ($users as $nom_user => $user)
		{	if (!empty($user->username)){
			#echo "usuario ".$user->username."<br>";
			echo '<input type="radio" name="username" value="'.$user->username.'">'.$user->username.'&nbsp;&nbsp;&nbsp;&nbsp;'.$user->groupname.'&nbsp;&nbsp;&nbsp;&nbsp;'.$user->folder.'<br>';
			}
		}

	?>

	<?php
	echo "<p><input type='submit' value='Menú principal ' name='principal'></p>
			<p><input type='submit' value='Eliminar usuario' name='delete'></p>
	</form>";
	?>

</body>
</html>