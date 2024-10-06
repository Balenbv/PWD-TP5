<?php 

function data_submitted() {
    $_AAux= array();
    if (!empty($_POST))
        $_AAux =$_POST;
        else
            if(!empty($_GET)) {
                $_AAux =$_GET;
            }
        if (count($_AAux)){
            foreach ($_AAux as $indice => $valor) {
                if ($valor=="")
                    $_AAux[$indice] = 'null' ;
            }
        }
        return $_AAux;
        
}

function verEstructura($e){
    echo "<pre>";
    print_r($e);
    echo "</pre>"; 
}

spl_autoload_register(function ($class_name){
    $directorys = array(
        $_SESSION['ROOT'].'src/modelo/',
        $_SESSION['ROOT'].'src/modelo/conector/',
        $_SESSION['ROOT'].'src/control/',
    );
    $i = 0;
    $LoEncontro = false;
    while($i < count($directorys) && !$LoEncontro){
        if(file_exists($directorys[$i] . $class_name . '.php')){
            require_once($directorys[$i] . $class_name . '.php');
            $LoEncontro = true;
        } else {
            $i++;
        }
    }
    return $LoEncontro;
});



function hexToRgb($hex) {
    // Eliminar el símbolo '#' si está presente
    $hex = str_replace("#", "", $hex);

    // Convertir el valor hexadecimal a RGB
    if (strlen($hex) == 3) {
        // Formato abreviado (ej. #FFF)
        $r = hexdec($hex[0] . $hex[0]);
        $g = hexdec($hex[1] . $hex[1]);
        $b = hexdec($hex[2] . $hex[2]);
    } else {
        // Formato completo (ej. #FFFFFF)
        $r = hexdec($hex[0] . $hex[1]);
        $g = hexdec($hex[2] . $hex[3]);
        $b = hexdec($hex[4] . $hex[5]);
    }

    return array($r, $g, $b);
}
