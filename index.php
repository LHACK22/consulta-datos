<?php

require_once "controllers/consulta.controller.php";
require_once "controllers/resultConsulta.controller.php";

require_once "models/persona.model.php";

$consulta = new ControllerConsulta();
$consulta->ctrConsulta();
