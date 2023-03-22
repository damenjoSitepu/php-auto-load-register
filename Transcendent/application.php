<?php 
// Using Autoload
spl_autoload_register('setAutoload');

function setAutoload($className) 
{
    $path = 'Support/';
    include_once $path . $className . '.php';
}