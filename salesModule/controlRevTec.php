<?php
class controlRevTec
{
    public function mostrarDatosRev()
    {
        include_once('formDatosRev.php');
        $objFormDatosRev = new formDatosRev();
        $objFormDatosRev -> formDatosRevshow();
    }
    
    public function mostrarFichaRev()
    {
        include_once('formFichaRev.php');
        $objFormFichaRev = new formFichaRev();
        $objFormFichaRev -> formFichaRevShow();
    }
}
?>