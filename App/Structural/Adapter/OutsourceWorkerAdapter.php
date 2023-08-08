<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Adapter;

use App\Structural\Adapter\Interfaces\NativeWorker;
use App\Structural\Adapter\Interfaces\OutsourceWorker;

/**
 * Description of OutsourceWorkerAdapter
 *
 * @author leonid
 */
class OutsourceWorkerAdapter implements NativeWorker
{
    private OutsourceWorker $outsourceWorker;
    
    public function __construct(OutsourceWorker $outsourceWorker) 
    {
        $this->outsourceWorker = $outsourceWorker;
    }

    
    public function countSalary(): int 
    {
        return $this->outsourceWorker->countSalaryByHour(80);
    }
}
