<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\AbstarctFactory\Native;

use App\Creational\AbstarctFactory\Interfaces\Worker;

/**
 * Description of NativeDeveloperWorker
 *
 * @author leonid
 */
class NativeDeveloperWorker implements Worker
{
    
    public function work() 
    {
        printf('I developing as native!!!' . PHP_EOL);
    }
}
