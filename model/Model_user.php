<?php
### VLADISLAV BOGDANOV ###
### 	ASO - M06      ###
### 	 ASIX 2        ###


//INCLUIMOS EL MODELO DE USUARIO REFERENCIAL A SUS VARIABLES
include_once("model/User.php");

//CREAMOS CLASE MODEL USER
class Model_user {

#############################################CREATE USER FUNCION#########################################

//CREAMOS FUNCION PUBLICA PARA CREAR USUARIO CON LAS VARIABLES SUBSTRAIDAS DE USER.PHP
	public function create_user($username, $groupname, $folder, $passw, $department)
	{
////GENERAMOS EL USER Y SU VARIABLE PARA ESTA FUNCION
		$usuario=new User($username, $groupname, $folder, $passw, $department);
//DEVOLVEMOS EL PASSTHRU DONDE VAMOS A EJECUTAR EL SCRIPT PARA AÑADIR EL USER EN LINUX Y COMPROBAR DONDE 1 ES MAL Y 0 ES BIEN
		passthru('sudo ./add_user.sh '.$usuario->username.' '.$usuario->groupname.' '.$usuario->folder.' '.$usuario->passw.' '.$usuario->department , $retorno);
//CREAMOS UN IF PARA DEVOLVER LA DESCRIPCION REFERENTE AL PASSTHRU
	if($retorno=="0"){
		echo " -----***----- USUARIO ' $usuario ' CREADO CORRECTAMENTE -----***-----";
	}else{
		echo " -----***----- TIENES QUE PONER ALGO O HAS PUESTO ALGO MAL! -----***-----";
}
//DEVOLVEMOS EL RETURN
		return $retorno;
	}

#############################################LIST USER FUNCION###########################################

//CREAMOS FUNCION PUBLICA PARA LISTAR USUARIO
	public function list_user()
	{
//DEVOLVEMOS EL PASSTHRU DONDE VAMOS A EJECUTAR EL SCRIPT PARA LISTAR LOS USUARIOS Y COMPROBAR DONDE 1 ES MAL Y 0 ES BIEN
		passthru("./list_users.sh");
//GENERAMOS EL ARCHIVO CON LOS USUARIOS DISPONIBLES DE DONDE SE VAN A IMPRIMIR EN LA PAGINA.
		$file = new SplFileObject("users.txt");
		// Loop hasta taerminar al final del archivo.
		while (!$file->eof()) {
			// hacer eco cada linia para cada usuario al archivo.
			$u=$file->fgets();
			$u1=explode("@", $u);
			$passw='';
			$resultat_list[$u1[0]] = new User($u1[0], $u1[1], $u1[2], $passw);
		}
//DEJAMOS EL ARCHIVO COMO FINALIZADO Y DEVOLVEMOS EL RETURN.
		$file=null;
		return $resultat_list;
	}

#############################################DELETE USER FUNCION#########################################

//CREAMOS FUNCION PUBLICA PARA ELIMINAR USUARIO CON LA VARIABLE SUBSTRAIDA DE USER.PHP
	public function delete_user($username)
	{
//DEVOLVEMOS LA VARIABLE CON STRING EN BLANCO PARA ELIMINAR EL USUARIO
		$usuario=new user($username, '', '', '');
//DEVOLVEMOS EL PASSTHRU DONDE VAMOS A EJECUTAR EL SCRIPT PARA ELIMINAR EL USER Y COMPROBAR DONDE 1 ES MAL Y 0 ES BIEN
		passthru("sudo ./deluser.sh ".$usuario->username, $retorno);
//OPCIONALMENTE PODEMOS RETORNAR EL VALOR CON UN ECHO, PERO NO ES NECESARIO YA QUE NOS INDICA DIRECTAMENTE SI FUE ELIMINADO.
#		echo "retorno de passthru: ".$retorno;
	}
}

?>