<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Interpreter;

/**
 * Description of VariableExp
 *
 * @author leonid
 */
class VariableExp extends Expression
{
    private int $key;
    
    public function __construct(int $key)
    {
        $this->key = $key;
    }

    public function interpreter(Context $context): bool
    {
        return $context->lookUp($this->key);
    }
}
