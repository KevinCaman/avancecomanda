<?php
class formFichaRev
{
   public function formFichaRevShow()
    {
        ?>
        <html>
        <head>
            <title>Datos de Revisión Técnica</title>
        </head>
        <body>
            <h1>Datos de Revisión Técnica</h1>

            <?php
            
            $DNI = $_POST['dni'];
            $Marca = $_POST['marca'];
            $Modelo = $_POST['modelo'];
            $Placa = $_POST['placa'];
            $FechaE = $_POST['fecha_entrada'];
            $Salida = $_POST['salida_programada'];

            $descripcion = $_POST['descripcion']; 
            ?>

            <form name="formFichaRev" method="POST" action="./getfichaRev.php">
                <label for="dni2">DNI:</label>
                <input type="text" name="dni2" id="dni2" value="<?php echo $DNI; ?>" readonly><br>

                <label for="modelo2">Modelo:</label>
                <input type="text" name="modelo2" id="modelo2" value="<?php echo $Modelo; ?>" readonly><br>

                <label for="descripcion2">Descripción de lo solicitado:</label>
                <input type="text" name="descripcion2" id="descripcion2" value="<?php echo $descripcion; ?>" readonly><br>

                <label for="marca2">Marca:</label>
                <input type="text" name="marca2" id="marca2" value="<?php echo $Marca; ?>" readonly><br>

                <label for="placa2">N° de Placa:</label>
                <input type="text" name="placa2" id="placa2" value="<?php echo $Placa; ?>" readonly><br>

                <label for="fechaEntrada2">Fecha de Entrada:</label>
                <input type="text" name="fechaEntrada2" id="fechaEntrada2" value="<?php echo $FechaE; ?>" readonly><br>

                <label for="fechaSalida2">Fecha de Salida:</label>
                <input type="text" name="fechaSalida2" id="fechaSalida2" value="<?php echo $Salida; ?>" readonly><br>

                <label for="precio">Precio:</label>
                <input type="text" name="precio" id="precio"><br>

                <input type="submit" name="btnAceptar" value="Aceptar Solicitud">
                <input type="submit" name="btnRechazar" value="Rechazar Solicitud">
            </form>
        </body>
        </html>
        <?php
    }
}
?>