<?php
function verificarBoton($btonEnviar)
{
    if(isset($btonEnviar))
        return true;
    else
        return false;
}

function validarCampos($DNI, $Marca, $Modelo, $Placa, $FechaE, $Salida)
{
    $DNI = trim($DNI);
    $Marca = trim($Marca);
    $Modelo = trim($Modelo);
    $Placa = trim($Placa);
    $FechaE = trim($FechaE);
    $Salida = trim($Salida);

    if (is_numeric($DNI) && strlen($DNI) == 8) {
        return true;
    } else {
        return false;
    }
}

function validarRadios($RevTec, $Pintado)
{
    if ($RevTec || $Pintado) {
        return true;
    } else {
        return false;
    }
}

$DNI = $_POST['dni'];
$Marca = $_POST['marca'];
$Modelo = $_POST['modelo'];
$Placa = $_POST['placa'];
$FechaE = $_POST['fecha_entrada'];
$Salida = $_POST['salida_programada'];
$boton = $_POST['btnEnviar'];
$RevTec=$_POST['detalle1'];
$Pintado=$_POST['detalle2'];

if(verificarBoton($boton) && validarCampos($DNI, $Marca, $Modelo, $Placa, $FechaE, $Salida))
{
    
    if (validarRadios($RevTec, $Pintado) && $RevTec == true) {
        
        include_once('controlRevTec.php');
        $DNI = $_POST['dni'];
        $Marca = $_POST['marca'];
        $Modelo = $_POST['modelo'];
        $Placa = $_POST['placa'];
        $FechaE = $_POST['fecha_entrada'];
        $Salida = $_POST['salida_programada'];
        $obControl = new controlRevTec();
        $obControl -> mostrarDatosRev();
        
        
    } elseif (validarRadios($RevTec, $Pintado) && $Pintado == true) {
        
        include_once('controlPintado.php');
        $obControl = new controlPintado();
        $obControl -> mostrarDatosPint();
        
    } else {

        include_once('../shared/windowMensajeSistema.php');
        $objMensaje = new windowMensajeSistema();
        $objMensaje -> windowMensajeSistemaShow("Error: No se a seleccionado ninguna opción de servicio","<a href='../index.php'>ir al inicio</a>");
    }
}
else
{
    include_once('../shared/windowMensajeSistema.php');
    $objMensaje = new windowMensajeSistema();
    $objMensaje -> windowMensajeSistemaShow("Error: Los datos ingresados no son válidos","<a href='../index.php'>ir al inicio</a>");
}
?>