<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\Builder;

/**
 * Description of Operator
 *
 * @author leonid
 */
class Operator 
{
    public function make(TextBuilder $builder): Message
    {
        $builder->makeHeader();
        $builder->makeBody();
        $builder->makeFooter();
        $builder->makeCustom();
        
        return $builder->getText();
    }
}
