<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Proxy;

use App\Structural\Proxy\Interfaces\Worker;

/**
 * Description of WorkerOutsource
 *
 * @author leonid
 */
class WorkerOutsource implements Worker
{
    private array $hours = [];
    public function closedHours($hours)
    {
        $this->hours[] = $hours;
    }

    public function countSalary(): int 
    {
        return array_sum($this->hours) * 500;
    }
}
