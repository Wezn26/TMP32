<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Registry;

/**
 * Description of Registry
 *
 * @author leonid
 */
abstract class Registry 
{
    private static array $services = [];
    
    final public static function getServices($key): string|object 
    {
        if (isset(self::$services[$key])) {
            return self::$services[$key]; 
        }
        return 'This service doesnt exists!!!';
       
    }

    final public static function setServices($key, Service $service)
    {
        self::$services[$key] = $service;
    }


}
