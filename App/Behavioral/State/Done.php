<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\State;

use App\Behavioral\State\Interfaces\State;

/**
 * Description of Done
 *
 * @author leonid
 */
class Done implements State
{

    public function toNext(Task $task)
    {
        
    }

    public function getStatus(): string
    {
        return 'Done!!!';
    }
}
