<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Decorator;

use App\Structural\Decorator\Interfaces\Worker;

/**
 * Description of Developer
 *
 * @author leonid
 */
class Developer implements Worker
{    
    public function countSalary(): int 
    {
        return 20 * 3000;
    }
}
