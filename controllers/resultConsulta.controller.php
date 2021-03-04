<?php

class ControllerResultConsulta
{
    static public function ctrResultConsulta()
    {

        if (isset($_POST["documento"]) && $_POST["documento"] != "") {
            $_SESSION["documento"] =  $_POST["documento"];
            echo '<script>
                    window.location = "resultConsult";
                </script>';
        }            
    }

    static public function ctrMostrarDatos($documento)
    {
        $respuesta = ModelPersona::MdlMostrarDatos($documento);

        return $respuesta;
    }

}
