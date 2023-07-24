<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\AbstarctFactory\Outsource;

use App\Creational\AbstarctFactory\Interfaces\Worker;

/**
 * Description of OutsourceDesignerWorker
 *
 * @author leonid
 */
class OutsourceDesignerWorker implements Worker
{
    
    public function work() 
    {
        printf('I am designing is outsource!!!' . PHP_EOL);
    }
}
