<?php
class Conexion
{

    static public function conectar()
    {
        $link = new PDO(
            "mysql:host=localhost;dbname=consulta-datos-colsafe-db",
            "root",
            ""
        );

        $link->exec("set names utf8");

        return $link;
    }
}
