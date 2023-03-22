<?php 

/**
 * Documentation
 * 
 * @method static sayHello(string $name)
 */
class Hello {
    /**
     * Say hello to anybody inside this worlds
     * 
     * @param string
     * @return string
     */
    public static function sayHello(string $name = 'Damenjo'): string
    {
        return "Hello {$name}";
    }
}