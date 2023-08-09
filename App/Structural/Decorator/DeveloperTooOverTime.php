<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Decorator;

/**
 * Description of DeveloperTooOverTime
 *
 * @author leonid
 */
class DeveloperTooOverTime extends WorkerDecorator
{
    public function countSalary(): int 
    {
        return $this->worker->countSalary() + 
               $this->worker->countSalary() * 0.4;
    }
}
