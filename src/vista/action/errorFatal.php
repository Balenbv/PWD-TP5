<?php
include "../../../vendor/autoload.php";
use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;
$whoops = new Run();
$whoops->pushHandler(new PrettyPageHandler());
$whoops->register();

    $a = 10;
    $b = 0;
    function division($a, $b){
        return $a / $b;
    }
    division($a, $b);

?>