<?php
function verificarBoton2($btonSiguiente)
{
    if(isset($btonSiguiente))
        return true;
    else
        return false;
}

function validarCampos2($descripcion)
{
    $descripcion=trim($descripcion);

    if (strlen($descripcion) > 0) {
        return true;
    } else {
        return false;
    }
}

$boton2 = $_POST['btnSiguiente1'];

if(verificarBoton2($boton2))
{
    $descripcion = $_POST['descripcion'];
    if (validarCampos2($descripcion)) {
        
        include_once('controlRevTec.php');
        $obControl = new controlRevTec();
        $obControl -> mostrarFichaRev();
        
        
    } else {

        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Error: Los datos ingresados no son validos","<a href='../index.php'>ir al inicio</a>");
    }
}
else
{
    include_once('../shared/windowMensajeSistema.php');
    $objMensaje = new windowMensajeSistema();
    $objMensaje -> windowMensajeSistemaShow("Error: Se a detectado un error","<a href='../index.php'>ir al inicio</a>");
}
?>