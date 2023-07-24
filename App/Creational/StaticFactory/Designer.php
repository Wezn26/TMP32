<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\StaticFactory;

/**
 * Description of Designer
 *
 * @author leonid
 */
class Designer implements Interfaces\Worker
{
    
    public function work() 
    {
        printf('I am a designer!!!' . PHP_EOL);
    }
}
