<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\State;

use App\Behavioral\State\Interfaces\State;

/**
 * Description of Test
 *
 * @author leonid
 */
class Test implements State
{
    
    public function toNext(Task $task) 
    {
        $task->setState(new Done());
    }
    
    public function getStatus(): string 
    {
        return 'Test!!!';
    }
}
