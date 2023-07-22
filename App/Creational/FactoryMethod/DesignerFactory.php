<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\FactoryMethod;

/**
 * Description of DesignerFactory
 *
 * @author leonid
 */
class DesignerFactory implements Interfaces\WorkingFactory
{
    
    public static function make(): Designer
    {
        return new Designer();
    }
}
