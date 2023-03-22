<?php 
// Using Autoload
// spl_autoload_register('setAutoload');
spl_autoload_register('setComplexAutoloadOldService');
spl_autoload_register('setComplexAutoloadNewService');

// Simple Autoload
// function setAutoload($className) 
// {
//     $path = __DIR__ . '/Support/Basic/';
//     include_once $path . $className . '.php';
// }

/**
 * Complex Autoload Specific For Old Services
 */
function setComplexAutoloadOldService($className)
{
    $path = __DIR__ . '/Support/Intermediate/OldService/';
    $fullClassNamePath = explode('\\',$className);
    include_once $path . end($fullClassNamePath) . '.php';
}

/**
 * Complex Autoload Specific For New Services
 */
function setComplexAutoloadNewService($className) {
    $path = __DIR__ . '/Support/Intermediate/NewService/';
    $fullClassNamePath = explode('\\',$className);
    include_once $path . end($fullClassNamePath) . '.php';
}

