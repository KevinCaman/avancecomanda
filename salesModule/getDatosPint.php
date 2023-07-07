<?php
function verificarBoton($btonSiguiente2)
{
    if(isset($btonSiguiente2))
        return true;
    else
        return false;
}

function validarCampos($color, $zona)
{
    $color=trim($color);
    $zona=trim($zona);

    if (strlen($color) > 0 && strlen($zona) > 0) {
        return true;
    } else {
        return false;
    }
}

$boton3 = $_POST['btnSiguiente'];

if(verificarBoton($boton3))
{
    $color = $_POST['color_pintura']; 
    $zona = $_POST['zona_pintar'];
    if (validarCampos($color, $zona)) {
        
        include_once('controlPintado.php');
        $obControl = new controlPintado();
        $obControl -> mostrarFichaPint();
        
        
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