<?php
class formDatosVehicDet
{
   public function formDatosVehicDetShow()
    {
        ?>
        <html>
        <head>
            <title>Comanda de Servicio</title>
        </head>
        <body>
            <h1>Comanda de Servicio</h1>
            <form name="formDatosVehicDet" method="POST" action="./salesModule/getDatos.php">
                <fieldset>
                    <legend>Datos del Vehículo</legend>
                    <label for="dni">DNI:</label>
                    <input type="text" name="dni" id="dni">
                    <br>

                    <label for="marca">Marca:</label>
                    <input type="text" name="marca" id="marca">
                    <br>

                    <label for="modelo">Modelo:</label>
                    <input type="text" name="modelo" id="modelo">
                    <br>

                    <label for="placa">N° de Placa:</label>
                    <input type="text" name="placa" id="placa">
                    <br>

                    <label for="fecha_entrada">Fecha de Entrada:</label>
                    <input type="date" name="fecha_entrada" id="fecha_entrada">
                    <br>

                    <label for="salida_programada">Salida Programada:</label>
                    <input type="date" name="salida_programada" id="salida_programada">
                    <br>
                </fieldset>

                <fieldset>
                    <legend>Detalle</legend>
                    <label>Seleccione un detalle:</label><br>
                    <input type="radio" name="detalle1" id="detalle1" value="R. Técnica">
                    <label for="detalle1">R. Técnica</label><br>
                    <input type="radio" name="detalle2" id="detalle2" value="Pintado">
                    <label for="detalle2">Pintado</label><br>
                </fieldset>

                <br>

                <input type="submit" name="btnEnviar" value="Enviar">
            </form>
        </body>
        </html>
        <?php
    }
}
?>