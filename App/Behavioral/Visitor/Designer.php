<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Visitor;

use App\Behavioral\Visitor\Interfaces\Worker;
use App\Behavioral\Visitor\Interfaces\WorkerVisitor;

/**
 * Description of Designer
 *
 * @author leonid
 */
class Designer implements Worker
{

    public function work()
    {
        printf('Designer is working!!!' . PHP_EOL);
    }

    public function accept(WorkerVisitor $visitor)
    {
        $visitor->visitDesigner($this);
    }
}
