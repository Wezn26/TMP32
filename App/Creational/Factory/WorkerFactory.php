<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\Factory;

/**
 * Description of WorkerFactory
 *
 * @author leonid
 */
class WorkerFactory 
{
    public static function make(): Worker
    {
        return new Worker();
    }
}
