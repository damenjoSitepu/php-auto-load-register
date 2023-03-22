<?php 
/**
 * Entry Point Of Application
 */
require_once('Transcendent/application.php');

/**
 * Example One
 */
// $app = new Hello;
// echo $app::sayHello('Tari');

/**
 * Example Two
 */
// $app = new World;
// echo $app::sumTwoNumber(10,20);
// echo "\n";
// echo $app::sumTwoNumber();

/**
 * Example Three ( Class With Namespace )
 */
new Transcendent\Support\Intermediate\OldService\Product();
echo "\n";
new \Transcendent\Support\Intermediate\NewService\Product();