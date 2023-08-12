<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Flyweight;

/**
 * Description of TypeMail
 *
 * @author leonid
 */
abstract class TypeMail 
{
    protected string $text;
    
    public function __construct(string $text) 
    {
        $this->text = $text;
    }

}
