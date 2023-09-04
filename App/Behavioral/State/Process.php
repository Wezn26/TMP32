<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\State;

use App\Behavioral\State\Interfaces\State;

/**
 * Description of Process
 *
 * @author leonid
 */
class Process implements State
{

    public function toNext(Task $task)
    {
        $task->setState(new Test());
    }

    public function getStatus(): string
    {
        return 'Process!!!';
    }
}
