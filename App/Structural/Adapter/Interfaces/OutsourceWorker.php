<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace App\Structural\Adapter\Interfaces;

/**
 *
 * @author leonid
 */
interface OutsourceWorker 
{
    public function countSalaryByHour($hour): int;
}
