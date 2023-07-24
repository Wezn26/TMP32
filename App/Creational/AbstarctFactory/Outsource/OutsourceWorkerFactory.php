<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\AbstarctFactory\Outsource;

use App\Creational\AbstarctFactory\Interfaces\AbstractFactory;

/**
 * Description of OutsourceWorkerFactory
 *
 * @author leonid
 */
class OutsourceWorkerFactory implements AbstractFactory
{
    
    public static function makeDesignerWorker(): object
    {
        return new OutsourceDesignerWorker();
    }

    public static function makeDeveloperWorker(): object
    {
        return new OutsourceDeveloperWorker();
    }
}
