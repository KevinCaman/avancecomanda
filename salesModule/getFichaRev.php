<?php
function verificarBoton1($btonAceptar)
{
    if(isset($btonAceptar))
        return true;
    else
        return false;
}

function verificarBoton2($btonCancelar)
{
    if(isset($btonCancelar))
        return true;
    else
        return false;
}


function validarCampos($precio)
{
    $descripcion=trim($precio);

    if (strlen($precio) > 0) {
        return true;
    } else {
        return false;
    }
}


$boton1 = $_POST['btnAceptar'];
$boton2 = $_POST['btnRechazar'];

if(verificarBoton1($boton1))
{
    $precio = $_POST['precio'];
    if (validarCampos($precio)) {
        
        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Solicitud confirmada","<a href='../index.php'>ir al inicio</a>");
        
        
    } else {

        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Error: Los datos ingresados no son validos","<a href='../index.php'>ir al inicio</a>");
    }
}

if(verificarBoton2($boton2))
{   
        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Solicitud cancelada","<a href='../index.php'>ir al inicio</a>");
      
}
?>