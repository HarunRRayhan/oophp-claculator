<?php

/**
 * @class Calculator
 * Calculator Main Class
 */

class Calculator {
    
    // All Property
    
    /** Getting result
     * @var int result 
     */
    protected $result;
    
    /** Operation
     *
     * @var mixed Operation 
     */
    protected $operation;
    
    /**
     * Settin Operation Method
     * @param string $operation
     */
    public function setOperation(OperatorInterface $operation) {
        $this->operation = $operation;
        
    }
    
    
    /**
     * Calculate method
     */
    public function calculate() {
        foreach( func_get_args() as $number){
            $this->result = $this->operation->run($number, $this->result);
        }
    }
    
    
    /**
     * Getttin Result
     * @return int
     */
    public function getResult() {
        return $this->result;
    }
}
