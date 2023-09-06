<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Interpreter;

/**
 * Description of OrExpression
 *
 * @author leonid
 */
class OrExpression extends Expression
{
    private int $keyOne;
    private int $keyTwo;

    public function __construct(int $keyOne, int $keyTwo)
    {
        $this->keyOne = $keyOne;
        $this->keyTwo = $keyTwo;
    }

    public function interpreter(Context $context): bool
    {
        return $context->lookUp($this->keyOne) ||
               $context->lookUp($this->keyTwo);
    }
}
