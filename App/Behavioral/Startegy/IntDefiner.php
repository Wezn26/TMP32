<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Behavioral\Startegy;

use App\Behavioral\Startegy\Interfaces\Definer;

/**
 * Description of IntDefiner
 *
 * @author leonid
 */
class IntDefiner implements Definer
{
    public function define($arg): string
    {
        return $arg . ' From int strategy!!!';
    }
}
