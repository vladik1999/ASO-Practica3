<?php
### VLADISLAV BOGDANOV ###
### 	ASO - M06      ###
### 	 ASIX 2        ###

//INCLUIMOS EL MODELO GRUPO Y SUS VARIABLES
include_once("model/Model_group.php");

//CREAMOS CLASE DEL CONTROLADOR CREAR GRUPO
class controller_create_group {
//AÑADIMOS LA VARIABLE PUBLICA DEL MODEL
	public $model;

#############################################CONSTRUCT FUNCION###########################################
	public function __construct()  {  
//INDICAMOS CUAL ES LA VARIABLE DEL MODEL ELEGIDO.
        $this->model = new Model();
    }

#############################################INVOKE FUNCION###########################################
	public function invoke() {

//SI NO SE PONE NADA O ES INCORRECTO NOS ENVIA DE VUELTA A LA MISMA PAGINA
		if (!isset($_REQUEST['create'])) {
			//INCLUIMOS EL FORMULARIO QUE VOLVERA DE VUELTA
			include 'view/form_create_group.php';
		}
		//SI ES CORRECTO
		else {
//SI ES CORRECTO ENTONCES QUEDATE EN LA PAGINA Y MUESTRA EL RESULTADO SI ES INCORRECTO ENVIA A ERROR SI ES ERROR ENVIA A OTRA PAGINA.
			$this->model->create_group($_REQUEST['group']);
			if ($result == 0)
				include 'view/form_create_group.php';
			else
				include 'view/error.php';
		}
	}
}
?>