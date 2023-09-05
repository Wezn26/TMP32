<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\ObjectNull;

use App\Behavioral\ObjectNull\Interfaces\Worker;

/**
 * Description of Developer
 *
 * @author leonid
 */
class Developer implements Worker
{
    
    public function work()
    {
        printf('Developer is working!!!');
    }
}
