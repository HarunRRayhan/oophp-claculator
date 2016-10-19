<?php

class Multiplier implements OperatorInterface {
    
    /**
     * Running Multiplier
     * @param int $result
     * @param int $number
     * @return int
     */
    public function run($result, $number) {
        return $result * $number;
    }
}
