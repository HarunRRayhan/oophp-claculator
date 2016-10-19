<?php


/**
 * Subtractor class of Calculations
 */
class Subtractor implements OperatorInterface {
    
    /**
     * Running Subtractor method
     * @param int $number
     * @param int $result
     * @return int
     */
    public function run($number, $result){
        return $result - $number;
    }
}
