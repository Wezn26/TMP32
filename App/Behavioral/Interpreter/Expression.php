<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Interpreter;

/**
 * Description of Expression
 *
 * @author leonid
 */
abstract class Expression
{
    abstract public function interpreter(Context $context): bool;
}
