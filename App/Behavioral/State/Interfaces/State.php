<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace App\Behavioral\State\Interfaces;

use App\Behavioral\State\Task;

/**
 *
 * @author leonid
 */
interface State 
{
    public function toNext(Task $task);
    public function getStatus();
}
