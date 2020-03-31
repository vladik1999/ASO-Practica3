<?php
### VLADISLAV BOGDANOV ###
### 	ASO - M06      ###
### 	 ASIX 2        ###


#############################################CLASE GROUP PARA INCLUIR EN ARCHIVOS###########################################
class User {
//CREAMOS TODAS LAS VARIABLES PÚBLICAS A UTILIZAR EN INCLUDE DENTRO DE OTROS ARCHIVOS
	public $username;
	public $passw;
	public $folder;
	public $groupname;
	public $department;
	
//CREAMOS FUNCION PUBLICA CONSTRUCT PARA USER
	public function __construct($username, $groupname, $folder, $passw, $department)  
    {  
//INDICAMOS CUAL ES LA VARIABLE DEL USER ELEGIDO Y SUS ATRIBUTOS
        $this->passw = $passw;
	$this->username = $username;
	$this->groupname = $groupname;
	$this->folder = $folder;
	$this->department = $department;
    } 
}

?>