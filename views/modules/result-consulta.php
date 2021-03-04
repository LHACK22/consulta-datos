<div class="content-datos">
        <div class="title">
            <h3>Datos Consultados</h3>
            <hr>
        </div>
    <?php
    $documento = $_SESSION["documento"];
    $persona = ControllerResultConsulta::ctrMostrarDatos($documento);
    if($persona){
        echo '
            <div class="datos">
                <div class="result">
                    <span>Nombre:</span>
                    <span>'.$persona["nombre"].'</span>
                </div>
            </div>
            <div class="datos">
                <div class="result">
                    <span>Apellido:</span>
                    <span>'.$persona["apellido"].'</span>
                </div>
            </div>
            <div class="datos">
                <div class="result">
                    <span>Correo Institucional:</span>
                    <span>'.$persona["correo"].'</span>
                </div>
            </div>
            <div class="datos">
                <div class="result">
                    <span>Contraseña:</span>
                    <span class="clave">Es su numero de documento</span>
                </div>
            </div>        
            <div class="datos">
                <div class="result">
                    <span>Con este correo y contraseña inicie session en <a href="https://mail.google.com" target="_blank">Gmail</a></span>
                </div>
            </div>        
        ';

    }else{
        echo '<h4>Datos no encontrados</h4>';
    }
    
    
    ?>

</div>