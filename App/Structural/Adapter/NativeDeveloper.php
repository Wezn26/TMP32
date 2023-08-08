<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Adapter;

use App\Structural\Adapter\Interfaces\NativeWorker;

/**
 * Description of NativeDeveloper
 *
 * @author leonid
 */
class NativeDeveloper implements NativeWorker
{    
    public function countSalary(): int 
    {
        return 3000 * 20;
    }
}
