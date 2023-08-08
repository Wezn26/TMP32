<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Composite;

/**
 * Description of Part
 *
 * @author leonid
 */
abstract class Part 
{
    private string $text;
    
    public function getText(): string 
    {
        return $this->text . PHP_EOL;
    }
    
    public function __construct(string $text) 
    {
        $this->text = $text;
    }



}
