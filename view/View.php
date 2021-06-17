<?php 
class View{
    static public function render($rutaVista, $datos=array()){
        //include($rutaVista);
        require_once($rutaVista);
    }
}
?>
