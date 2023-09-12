<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Mediator;

/**
 * Description of InfoBase
 *
 * @author leonid
 */
class InfoBase
{
    public function printInfo(Worker $worker)
    {
        printf($worker->work());
    }
}
