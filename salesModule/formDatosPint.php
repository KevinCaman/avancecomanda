<?php
class formDatosPint
{
   public function formDatosPintshow()
    {
        ?>
        <html>
        <head>
            <title>Datos del servicio</title>
        </head>
        <body>
            <h1>Datos del servicio</h1>

            <form name="formDatosPint" method="POST" action="./getDatosPint.php">
                <h2>Datos del Pintado</h2>
                <label for="color_pintura">Color de pintura:</label>
                <input type="text" name="color_pintura" id="color_pintura">

                <label for="zona_pintar">Zona a pintar:</label>
                <input type="text" name="zona_pintar" id="zona_pintar">

                <br><br>

                <input type="submit" name="btnSiguiente" value="Siguiente">
            </form>
        </body>
        </html>
        <?php
    }
}
?>