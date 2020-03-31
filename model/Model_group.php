<?php
### VLADISLAV BOGDANOV ###
### 	ASO - M06      ###
### 	 ASIX 2        ###


//INCLUIMOS EL GROUP.PHP REFERENCIAL A SUS VARIABLES
include_once("model/Group.php");

//CREAMOS CLASE MODEL USER
class Model {

#############################################CREATE GROUP FUNCION########################################
	public function create_group($group)
    {
////GENERAMOS EL GRUPO Y SU VARIABLE PARA ESTA FUNCION
        $usuario=new group($group);
//DEVOLVEMOS EL PASSTHRU DONDE VAMOS A EJECUTAR EL SCRIPT PARA AÑADIR EL GRUPO EN LINUX Y COMPROBAR DONDE 1 ES MAL Y 0 ES BIEN
        passthru('sudo ./add_group.sh '.$usuario->group, $retorno);
//CREAMOS UN IF PARA DEVOLVER LA DESCRIPCION REFERENTE AL PASSTHRU
	if($retorno=="0"){
		echo " -----***----- GRUPO ' $group ' CREADO CORRECTAMENTE -----***-----";
	}else{
		echo " -----***----- TIENES QUE PONER ALGO! -----***-----";
}
//DEVOLVEMOS EL RETURN
        return;
    }
	
	
#############################################LIST GROUP FUNCION#########################################

//CREAMOS FUNCION PUBLICA PARA LISTAR USUARIO
    public function list_group()
    {
//DEVOLVEMOS EL PASSTHRU DONDE VAMOS A EJECUTAR EL SCRIPT PARA LISTAR LOS GRUPOS Y COMPROBAR DONDE 1 ES MAL Y 0 ES BIEN
     passthru("./list_group.sh");
//GENERAMOS EL ARCHIVO CON LOS GRUPOS DISPONIBLES DE DONDE SE VAN A IMPRIMIR EN LA PAGINA.
     $file = new SplFileObject("./group.txt");
	// Loop hasta taerminar al final del archivo.
     while (!$file->eof()) {
         $g=$file->fgets();
         $resultat_list[$g] = new group($g);
     }
//DEJAMOS EL ARCHIVO COMO FINALIZADO Y DEVOLVEMOS EL RETURN.
     $file=null;
     return $resultat_list;
    }

#############################################DELETE GROUP FUNCION########################################

//CREAMOS FUNCION PUBLICA PARA ELIMINAR GRUPO CON LA VARIABLE SUBSTRAIDA DE USER.PHP
    public function delete_group($group)
    {
//DEVOLVEMOS LA VARIABLE CON STRING EN BLANCO PARA ELIMINAR EL GRUPO
        $usuario=new group($group);
#        echo $usuario->group;
//DEVOLVEMOS EL PASSTHRU DONDE VAMOS A EJECUTAR EL SCRIPT PARA ELIMINAR EL GRUPO Y COMPROBAR DONDE 1 ES MAL Y 0 ES BIEN
     passthru("./del_group.sh ".$usuario->group, $retorno);
//OPCIONALMENTE PODEMOS RETORNAR EL VALOR CON UN ECHO, PERO NO ES NECESARIO YA QUE NOS INDICA DIRECTAMENTE SI FUE ELIMINADO.
     echo "retorno de passthru: ".$retorno;
    }

}


?>