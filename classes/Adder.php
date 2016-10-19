<?php

/**
 * Adder class
 */
class Adder implements OperatorInterface {
   
    /**
     * Running Calculation
     * @param int $number
     * @param int $result
     * @return int
     */
    public function run($number, $result) {
        return $result + $number;
    }
}
