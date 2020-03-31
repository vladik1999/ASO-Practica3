<?php
### VLADISLAV BOGDANOV ###
### 	ASO - M06      ###
### 	 ASIX 2        ###


#############################################REDIRECCION A CONTROLLER PRINCIPAL###########################################
 
	include_once("controller/Controller.php");

	$controller = new Controller();
	$controller->invoke();

?>