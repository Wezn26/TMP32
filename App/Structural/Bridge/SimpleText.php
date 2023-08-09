<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Bridge;

use App\Structural\Bridge\Interfaces\Formatter;

/**
 * Description of SimpleText
 *
 * @author leonid
 */
class SimpleText implements Formatter
{
    
    public function format($str): string 
    {
        return $str;
    }
}
