<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\Builder;

/**
 * Description of Section
 *
 * @author leonid
 */
abstract class Section 
{
    private string $text;
    
    public function __construct(string $text) 
    {
        $this->text = $text;
    }
    
    public function __toString(): string 
    {
        return $this->text;
    }

}
