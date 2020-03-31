<?php
### VLADISLAV BOGDANOV ###
### 	ASO - M06      ###
### 	 ASIX 2        ###

//INCLUIMOS EL MODELO USER Y SUS VARIABLES
include_once("model/Model_user.php");

//CREAMOS CLASE DEL CONTROLADOR CREAR USER
class controller_create_user {
//AÑADIMOS LA VARIABLE PUBLICA DEL MODEL
	public $model;

#############################################CONSTRUCT FUNCION########################################

	public function __construct()  {  
        $this->model = new Model_user();
    }

#############################################INVOKE FUNCION###########################################

	public function invoke() {

//SI NO SE PONE NADA O ES INCORRECTO NOS ENVIA DE VUELTA A LA MISMA PAGINA
		if (!isset($_REQUEST['create'])) {
			//INCLUIMOS EL FORMULARIO QUE VOLVERA DE VUELTA
			include 'view/form_create_user.php';
		}
		//SI ES CORRECTO
		else{
//SI ES CORRECTO ENTONCES QUEDATE EN LA PAGINA Y MUESTRA EL RESULTADO SI ES INCORRECTO ENVIA A ERROR.
			$result = $this->model->create_user($_REQUEST['user'],$_REQUEST['group'],$_REQUEST['folder'],$_REQUEST['passw'],$_REQUEST['department']);
			if ($result == 0)			
				include 'view/form_create_user.php';
			else
				include 'view/error.php';
		}
	}
}
?>