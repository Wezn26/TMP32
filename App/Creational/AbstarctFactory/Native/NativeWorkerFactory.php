<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\AbstarctFactory\Native;

use App\Creational\AbstarctFactory\Interfaces\AbstractFactory;

/**
 * Description of NativeWorkerFactory
 *
 * @author leonid
 */
class NativeWorkerFactory implements AbstractFactory
{
    
    public static function makeDesignerWorker(): object 
    {
        return new NativeDisignerWorker();
    }

    public static function makeDeveloperWorker(): object
    {
        return new NativeDeveloperWorker();
    }
}
