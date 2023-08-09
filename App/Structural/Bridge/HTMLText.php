<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Structural\Bridge;

use App\Structural\Bridge\Interfaces\Formatter;

/**
 * Description of HTMLText
 *
 * @author leonid
 */
class HTMLText implements Formatter
{    
    public function format($str): string 
    {
        return "<p>$str</p>";
    }
}
