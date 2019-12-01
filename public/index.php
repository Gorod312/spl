<?php

include '../main/main.php';

use app\engine\Autoload;
use app\stack\Prob;

spl_autoload_register([new Autoload(), 'loadClass']);

$path = $_GET['dir']?:'/';
if ($path==='/'){
    $path=dirname(__DIR__).'/';
} else {
    $path=dirname(__DIR__).$path;
}

$prob = new Prob();
$prob->work($path);
