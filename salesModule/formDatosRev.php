<?php
class formDatosRev
{
   public function formDatosRevshow()
    {
        ?>
        <html>
        <head>
            <title>Datos del servicio</title>
        </head>
        <body>
            <h1>Datos del servicio</h1>

            <form name="formDatosRev" method="POST" action="./getDatosRev.php">
                <h2>Datos de la Revisión</h2>
                <label for="descripcion">Descripción de lo solicitado:</label>
                <input type="text" name="descripcion" id="descripcion">

                <br><br>

                <input type="submit" name="btnSiguiente1" value="Siguiente">
            </form>
        </body>
        </html>
        <?php
    }
}
?>