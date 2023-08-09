<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Decorator;

use App\Structural\Decorator\Interfaces\Worker;

/**
 * Description of WorkerDecorator
 *
 * @author leonid
 */
abstract class WorkerDecorator implements Worker
{
    protected Worker $worker;
    
    public function __construct(Worker $worker) 
    {
        $this->worker = $worker;
    }

}
