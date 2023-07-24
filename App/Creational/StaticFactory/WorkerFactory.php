<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\StaticFactory;

/**
 * Description of WorkerFactory
 *
 * @author leonid
 */
class WorkerFactory 
{
    public static function make($workerTitle): object
    {
        $className = 'App\Creational\StaticFactory\\' . $workerTitle;        
        
        if (class_exists($className)) {
            return new $className();
        }
        return null;
    }
}
