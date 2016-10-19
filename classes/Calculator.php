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
    public function setOperation($operation) {
        $this->operation = $operation;
    }
}
