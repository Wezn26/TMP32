<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational;

/**
 * Description of Singleton
 *
 * @author leonid
 */
final class Singleton 
{
    private static ?self $instance = null;
    private static string $name;
    
    public static function getName(): string 
    {
        return self::$name;
    }

    public static function setName(string $name): void 
    {
        self::$name = $name;
    }
    
    public static function getInstance() 
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    public function __clone(): void 
    {
        ;
    }
    
    public function __wakeup(): void
    {
        ;
    }  
    
    
}
