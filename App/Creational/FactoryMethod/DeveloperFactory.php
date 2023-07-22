<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\FactoryMethod;

/**
 * Description of DeveloperFactory
 *
 * @author leonid
 */
class DeveloperFactory implements Interfaces\WorkingFactory
{
    
    public static function make(): Developer
    {
        return new Developer();
    }
}
