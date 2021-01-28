<?php
class controladorCategorias
{
    static public function ctrMostrarCATySUB($tabla, $item, $valor)
    {
        $respuesta = ModeloCategorias::mdlMostrarCATySUB($tabla, $item, $valor);
        return $respuesta;
    }
}