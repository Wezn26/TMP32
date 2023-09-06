<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Chain;

use App\Behavioral\Chain\Interfaces\TaskInterface;

/**
 * Description of Senior
 *
 * @author leonid
 */
class Senior extends Handler
{
    
    public function processing(TaskInterface $task): ?array
    {
        return $task->getArray();
    }
}
