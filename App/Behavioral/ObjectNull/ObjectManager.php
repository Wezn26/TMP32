<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\ObjectNull;

use App\Behavioral\ObjectNull\Interfaces\Worker;


/**
 * Description of ObjectManager
 *
 * @author leonid
 */
class ObjectManager
{
    private Worker $worker;
    
    public function __construct(Worker $worker)
    {
        $this->worker = $worker;
    }
    
    public function goWork()
    {
        $this->worker->work();
    }

}
