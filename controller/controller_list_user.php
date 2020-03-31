<?php
### VLADISLAV BOGDANOV ###
### 	ASO - M06      ###
### 	 ASIX 2        ###

//INCLUIMOS EL MODELO USER Y SUS VARIABLES
include_once("model/Model_user.php");

//CREAMOS CLASE DEL CONTROLADOR LISTAR USER
class controller_list_user {
//AÑADIMOS LA VARIABLE PUBLICA DEL MODEL
	public $model;

#############################################CONSTRUCT FUNCION###########################################

	public function __construct()  {  
        $this->model = new Model_user();
    }

#############################################INVOKE FUNCION###########################################

	public function invoke() {

//SI NO SE PONE NADA O ES INCORRECTO NOS ENVIA DE VUELTA A LA MISMA PAGINA
		if (!isset($_REQUEST['delete'])){
			//INDICAMOS CUAL ES LA VARIABLE DEL USUARIO Y A QUE FUNCION DEL MODEL VA.
			$users=$this->model->list_user();
			//INCLUIMOS EL FORMULARIO QUE VOLVERA DE VUELTA
			include 'view/form_list_user.php';
		}
		//SI ES CORRECTO
		else{
//SI ES CORRECTO ENTONCES QUEDATE EN LA PAGINA, FORMULA LA ELIMINACION O LISTA DEL USER Y MUESTRA EL RESULTADO.
			$this->model->delete_user(trim($_REQUEST['username']));
			$users=$this->model->list_user();
			include 'view/form_list_user.php';
		}
	}
}
?>