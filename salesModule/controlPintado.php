<?php
class controlPintado
{
    public function mostrarDatosPint()
    {
        include_once('formDatosPint.php');
        $objFormDatosPint = new formDatosPint();
        $objFormDatosPint -> formDatosPintshow();
    }
    
    public function mostrarFichaPint()
    {
        include_once('formFichaPint.php');
        $objFormFichaPint = new formFichaPint();
        $objFormFichaPint -> formFichaPintShow();
    }
}
?>