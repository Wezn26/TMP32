<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\StaticFactory;

/**
 * Description of Developer
 *
 * @author leonid
 */
class Developer implements Interfaces\Worker
{
    
    public function work() 
    {
        printf('I am a developer!!!' . PHP_EOL);
    }
}
