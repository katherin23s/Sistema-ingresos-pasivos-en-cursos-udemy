<?php

require_once("conexion.php");
/* ==================================
    MODELO DE CATEGORIAS Y SUBCATEGORIAS
    ====================================== */
class ModeloCategorias
{
    static public function mdlMostrarCATySUB($tabla, $item, $valor)
    {
        //Metodo dinamico tanto para categorias como subcategorias
        if ($item == null && $valor == null) {
            $stmt = Conexion::conectar();
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
            $stmt->bindParam(":" . $item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        $stmt = null;
    }
}