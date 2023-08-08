<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Adapter;

use App\Structural\Adapter\Interfaces\OutsourceWorker;

/**
 * Description of OutsourceDeveloper
 *
 * @author leonid
 */
class OutsourceDeveloper implements OutsourceWorker
{    
    public function countSalaryByHour($hour): int 
    {
        return $hour * 500;
    }
}
