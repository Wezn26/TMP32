<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Proxy;

use App\Structural\Proxy\Interfaces\Worker;

/**
 * Description of WorkerProxy
 *
 * @author leonid
 */
class WorkerProxy extends WorkerOutsource implements Worker
{
    private int $salary = 0;
    
    public function countSalary(): int 
    {
        if ($this->salary === 0) {
            $this->salary = parent::countSalary();
        }
        return $this->salary;
    }
}
