<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\State;

use App\Behavioral\State\Interfaces\State;

/**
 * Description of Created
 *
 * @author leonid
 */
class Created implements State
{
    
    public function toNext(Task $task) 
    {
        $task->setState(new Process());
    }
    
    public function getStatus(): string
    {
        return 'Created!!!';
    }
    
    
}
