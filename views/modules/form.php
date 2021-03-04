<form method="post">
        <div class="inputs">
            <input type="text" placeholder="Numero de documento de identidad" name="documento">
            <button type="submit">Consultar</button>
            <?php

                $resultConsulta = new ControllerResultConsulta();
                $resultConsulta->ctrResultConsulta();

                ?>
        </div>

</form>