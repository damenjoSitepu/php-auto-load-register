<?php 

/**
 * Documentation
 * 
 * @method static sumTwoNumber(int $numA, int $numB)
 */

class World {
    /**
     * Num A Default 
     * 
     * @var int 
     */
    private const NUM_A = 1;

    /**
     * Num B Default
     * 
     * @var int
     */
    private const NUM_B = 2;

    /**
     * Sum Two Numbers
     * 
     * @param int $numA
     * @param int $numB
     * @return int
     */
    public static function sumTwoNumber(int $numA = World::NUM_A, int $numB = World::NUM_B): int 
    {
        return $numA + $numB;
    }
}