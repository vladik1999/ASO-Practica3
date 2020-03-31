<?php
### VLADISLAV BOGDANOV ###
### 	ASO - M06      ###
### 	 ASIX 2        ###


#############################################CLASE GROUP PARA INCLUIR EN ARCHIVOS###########################################

class Group {
    public $group;

//CREAMOS FUNCION PUBLICA CONSTRUCT PARA GROUP
    public function __construct($group)
    {
//INDICAMOS CUAL ES LA VARIABLE DEL GRUPO ELEGIDO
        $this->group = $group;

    }
}

?>