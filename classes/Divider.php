<?php

class Divider implements OperatorInterface {
    
    /**
     * Running Divider
     * @param int $result
     * @param int $number
     * @return int
     */
    public function run($result, $number) {
        return $result / $number;
    }
}

