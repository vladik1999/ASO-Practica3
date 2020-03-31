<?php
### VLADISLAV BOGDANOV ###
### 	ASO - M06      ###
### 	 ASIX 2        ###

//INCLUIMOS EL MODELO GRUPO Y SUS VARIABLES
include_once("model/Model_group.php");

//CREAMOS CLASE DEL CONTROLADOR LISTAR GRUPO
class controller_list_group {
//AÑADIMOS LA VARIABLE PUBLICA DEL MODEL
	public $model;
	
#############################################CONSTRUCT FUNCION###########################################
	public function __construct()  {  
        $this->model = new Model();
    }

#############################################INVOKE FUNCION###########################################
	public function invoke() {
//SI NO SE PONE NADA O ES INCORRECTO NOS ENVIA DE VUELTA A LA MISMA PAGINA
		if (!isset($_REQUEST['delete'])){
			//INCLUIMOS EL FORMULARIO QUE VOLVERA DE VUELTA
			$groups=$this->model->list_group();
			include 'view/form_list_group.php';
		}
		//SI ES CORRECTO
		else {
//SI ES CORRECTO ENTONCES QUEDATE EN LA PAGINA, FORMULA LA ELIMINACION O LISTA DEL GRUPO Y MUESTRA EL RESULTADO.
            	$this->model->delete_group(trim($_REQUEST['group']));
            	$groups=$this->model->list_group();
            	include 'view/form_list_group.php';
       	 }
	}
}
?>