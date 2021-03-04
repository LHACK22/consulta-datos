<?php

require_once "conexion.php";

class ModelPersona
{
    static public function MdlMostrarDatos($documento)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM persona WHERE documento = $documento");
        $stmt->execute();
        return $stmt->fetch();
    }

}