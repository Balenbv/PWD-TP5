<?php

include '../estructura/header.php';

$error = $_GET['error'];

echo $error;

switch ($error){
    case '1':
        $a = 10;
        $b = 0;
        function division($a, $b){
            return $a / $b;
        }
        division($a, $b);
        break;
    case '2':
        eval('echo "Esto es un error de parseo;');
        break;
    case '3':
        $array = [1, 2, 3];
        echo $array[5];
        break;
    case '4':
        throw new Exception("Esto es una excepción no capturada");
        break;
    case '5':
        echo $variable_no_definida;
        break;
    case '6':
        trigger_error("Esto es un error de usuario", E_USER_NOTICE);
        break;
    default:
        echo "Error no encontrado";
        break;
}