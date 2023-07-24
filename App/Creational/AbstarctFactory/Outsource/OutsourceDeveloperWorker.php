<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Creational\AbstarctFactory\Outsource;

use App\Creational\AbstarctFactory\Interfaces\Worker;

/**
 * Description of OutsourceDeveloperWorker
 *
 * @author leonid
 */
class OutsourceDeveloperWorker implements Worker
{
    //put your code here
    public function work() 
    {
        printf('I am developing is outsource!!!' . PHP_EOL);
    }
}
