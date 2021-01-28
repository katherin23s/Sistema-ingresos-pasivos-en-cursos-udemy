<?php
//Libreria
require_once("controlador/plantilla.controlador.php");
require_once("controlador/categorias.controlador.php");

require_once("modelo/categorias.modelo.php");

//Instancia
$plantilla = new controladorPlantilla();
$plantilla->ctrPlantilla();